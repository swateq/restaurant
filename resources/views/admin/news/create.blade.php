@extends('admin.layouts.main')

@section('content')
<h3 class="text-center mb-3 text-lg">Dodaj nowy post</h3> 
<form action="/admin/news" method="POST">
<input class="@error('title') border-red-500 @enderror appearance-none block w-full bg-gray-100 text-gray-500 border-2 border-gray-500 rounded py-3 px-4 mb-3" placeholder="Tytuł" name="title" value="{{ old('title') }}">
<textarea rows="10" class="@error('content') border-red-500 @enderror appearance-none block w-full bg-gray-100 text-gray-500 border-2 border-gray-500 rounded py-3 px-4 mb-3 resize-y" placeholder="Treść postu..." name="content"></textarea>
<div class="flex mt-4">
    
        <button type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-900">Zapisz</button>
        @csrf
    <a href="/admin/news" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-700 hover:bg-red-900 ml-3">Anuluj</a>
</div>
</form>

@endsection