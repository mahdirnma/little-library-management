@extends('layout.app')
@section('title')
    category
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex flex-row-reverse justify-between items-center border-b">
                <h2 class="text-xl">{{$category->title}}'s books</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">stock</td>
                        <td class="text-center">price</td>
                        <td class="text-center">summary</td>
                        <td class="text-center">page count</td>
                        <td class="text-center">published year</td>
                        <td class="text-center">ISBN</td>
                        <td class="text-center">title</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                            <td class="text-center">{{$book->stock}}</td>
                            <td class="text-center">{{$book->price}} $</td>
                            <td class="text-center">{{$book->summary}}</td>
                            <td class="text-center">{{$book->pageCount}} pg</td>
                            <td class="text-center">{{$book->publishedYear}}</td>
                            <td class="text-center">{{$book->ISBN}}</td>
                            <td class="text-center">{{$book->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$books->links()}}</div>
        </div>
@endsection
