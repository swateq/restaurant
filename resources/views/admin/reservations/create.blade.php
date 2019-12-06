@extends('admin.layouts.main')

@section('content')
<h3 class="text-center mb-3 text-lg">Dodaj nowy rezerwacje</h3> 
<form action="/admin/reservations" method="POST">
<input class="@error('title') border-red-500 @enderror appearance-none block w-full bg-gray-100 text-gray-500 border-2 border-gray-500 rounded py-3 px-4 mb-3" placeholder="Tytuł" name="title" value="{{ old('title') }}">
<input type="text" id="basicDate" name="start" placeholder="Please select Date Time" data-input>
<div class="flex mt-4">  
        <button type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-900">Zapisz</button>
        @csrf
    <a href="/admin/reservations" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-700 hover:bg-red-900 ml-3">Anuluj</a>
</div>
</form>

@endsection
@section('script')
    <script>
    $("#basicDate").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        time_24hr: true
    });
</script>
@endsection