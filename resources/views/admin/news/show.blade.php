@extends('admin.layouts.main')

@section('content')
<h4 class="text-2xl text-bold">{{ $news->title }}</h4>
<p>{{ $news->content }}</p>
<div class="flex mt-4">
    <a href="/admin/news/{{ $news->id }}" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-900">Edytuj</a>
    <form action="/admin/news/{{ $news->id }}" method="POST">
        <button type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-700 hover:bg-red-900 ml-3">Usuń</button>
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection