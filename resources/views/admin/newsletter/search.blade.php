@extends('admin.layouts.main')
@section('content')
<div>
    <div class="bg-white shadow-md rounded my-6">
        <form action="/admin/newsletter/search" method="get" class="mb-4">
        <input name="query" type="search" placeholder="Szukaj" class="w-1/3 bg-gray-800 text-sm text-white transition border border-transparent focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
        <button type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-700 hover:bg-green-900 ml-3">Szukaj</button>
        @csrf
    </form>
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="py-4 px-6 bg-gray-800 uppercase text-sm text-white border-b border-gray-light">Id</th>
            <th class="py-4 px-6 bg-gray-800 uppercase text-sm text-white border-b border-gray-light">Email</th>
            <th class="py-4 px-6 bg-gray-800 uppercase text-sm text-white border-b border-gray-light">Aktywny</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($newsletter as $item)
            <tr class="hover:bg-gray-300" data-href='/admin/news/{{ $item->id }}'>
                <td class="py-4 px-6 border-b border-gray-light">{{ $item->id }}</td>
                <td class="py-4 px-6 border-b border-gray-light">{{ $item->email }}</td>
                <td class="py-4 px-6 border-b border-gray-light">{{ $item->active }}</td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
@endsection