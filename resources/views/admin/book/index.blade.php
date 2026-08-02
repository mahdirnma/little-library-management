@extends('layout.app')
@section('title')
    books
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('books.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add book +</a>
                <h2 class="text-xl">books</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">authors</td>
                        <td class="text-center">categories</td>
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
                            <td class="text-center">
                                <form action="{{route('books.destroy',$book)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600 cursor-pointer">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('books.edit',$book)}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600 cursor-pointer">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('books.show',$book)}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-blue-600 cursor-pointer">authors</button>
                                </form>
                            </td>
                            <td class="text-center">
                                @foreach($book->categories as $cat)
                                    {{$cat->title}} ,
                                @endforeach
                            </td>
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
