@extends('admin.layouts.main')

@section('content')
<form action="/admin/news/{{ $news->id }}" method="POST">
@csrf
@method('PUT')
    <h3 class="text-center mb-3 text-lg">Edytuj post</h3> 
    <input class="appearance-none block w-full bg-gray-100 text-gray-500 border-2 border-gray-500 rounded py-3 px-4 mb-3"  name="title" value="{{ $news->title }}">
    <textarea rows="10" class="appearance-none block w-full bg-gray-100 text-gray-500 border-2 border-gray-500 rounded py-3 px-4 mb-3 resize-y"  name="content">{{ $news->content }}</textarea>
    <div class="flex mt-4">
            <button type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-900">Zapisz</button>
            
        <a href="/admin/news" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-700 hover:bg-red-900 ml-3">Anuluj</a>
    </div>
</form>
@endsection