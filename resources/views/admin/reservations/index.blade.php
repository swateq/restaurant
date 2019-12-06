@extends('admin.layouts.main')

@section('content')
<a href="/admin/reservations/create" class="text-white py-1 px-3 rounded bg-green-700 hover:bg-green-900">Dodaj rezerwacje</a>
    <div class="container">
        <div class="response"></div>
        <div id='calendar'></div>  
    </div>
@endsection

@section('script')
    
<script>
  $(document).ready(function () {
        
        var SITEURL = "{{url('/')}}";
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        const Toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/admin/reservations",
            displayEventTime: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,    
            locale: 'pl',         
            eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + '/admin/reservations/update',
                            data: {
                                'title': event.title,
                                'start': start,
                                'id': event.id
                            },
                            type: "POST",
                            success: function (response) {
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Rezerwacja ' + event.title + ' zaktualizowana'
                                    })
                                }
                        });
                    },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/admin/reservations/delete',
                        data: {
                          "id": event.id  
                        },
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Rezerwacja ' + event.title + ' usunięta'
                                    });
                                
                                }
                            }
                    });
                }
            }
 
        });
  });
 
  function displayMessage(message) {
    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
  }
</script>
@endsection