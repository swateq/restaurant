@extends('admin.layouts.main')
@section('content')
<div>
    <a href="/admin/news/create" class="text-white py-1 px-3 rounded bg-green-700 hover:bg-green-900 mb-4">Dodaj post</a>
    <div class="bg-white shadow-md rounded my-6">
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="py-4 px-6 bg-gray-800 uppercase text-sm text-white border-b border-gray-light">Id</th>
            <th class="py-4 px-6 bg-gray-800 uppercase text-sm text-white border-b border-gray-light">Post</th>
            <th class="py-4 px-6 bg-gray-800 uppercase text-sm text-white border-b border-gray-light">Edycja</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
            <tr class="hover:bg-gray-300 cursor-pointer clickable-row" data-href='/admin/news/{{ $item->id }}'>
                <td class="py-4 px-6 border-b border-gray-light">{{ $item->id }}</td>
                <td class="py-4 px-6 border-b border-gray-light">{{ $item->title }}</td>
                <td class="py-4 px-6 border-b border-gray-light flex">
                <a href="/admin/news/{{ $item->id }}/edit" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-900">Edytuj</a>
                <form action="/admin/news/{{ $item->id }}" method="POST">
                    <button type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-700 hover:bg-red-900 ml-3">Usuń</button>
                    @csrf
                    @method('DELETE')
                </form>
                </td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
      {{ $news->links() }}
    </div>
  </div>
@endsection

@section('script')
<script>
$(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
</script>


@endsection