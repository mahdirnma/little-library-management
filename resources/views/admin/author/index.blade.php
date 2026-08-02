@extends('layout.app')
@section('title')
    authors
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('authors.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add author +</a>
                <h2 class="text-xl">authors</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">books</td>
                        <td class="text-center">status</td>
                        <td class="text-center">biography</td>
                        <td class="text-center">birth country</td>
                        <td class="text-center">birth year</td>
                        <td class="text-center">last name</td>
                        <td class="text-center">first name</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                            <td class="text-center">
                                <form action="{{route('authors.destroy',$author)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600 cursor-pointer">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('authors.edit',$author)}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600 cursor-pointer">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('authors.show',$author)}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-blue-600 cursor-pointer">books</button>
                                </form>
                            </td>
                            <td class="text-center">{{$author->status==1?'active':'inactive'}}</td>
                            <td class="text-center">{{$author->biography}}</td>
                            <td class="text-center">{{$author->birthCountry}}</td>
                            <td class="text-center">{{$author->birthYear}}</td>
                            <td class="text-center">{{$author->lastName}}</td>
                            <td class="text-center">{{$author->firstName}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$authors->links()}}</div>
        </div>
@endsection
