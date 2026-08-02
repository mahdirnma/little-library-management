@extends('layout.app')
@section('title')
    update book
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">update book</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('books.update',compact('book'))}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-[45%] h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="title" class="font-semibold ml-5">: title</label>
                            <input type="text" name="title" value="{{$book->title}}" id="title" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('title')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="ISBN" class="font-semibold ml-5">: ISBN</label>
                            <input type="text" name="ISBN" value="{{$book->ISBN}}" id="ISBN" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('ISBN')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="publishedYear" class="font-semibold ml-5">: publishedYear</label>
                            <input type="number" name="publishedYear" min="1990" max="2026" value="{{$book->publishedYear}}" id="publishedYear" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('publishedYear')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="pageCount" class="font-semibold ml-5">: pageCount</label>
                            <input type="number" name="pageCount" min="1" max="1000" value="{{$book->pageCount}}" id="pageCount" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('pageCount')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="categories" class="font-semibold ml-5">: categories</label>
                            @foreach($categories as $category)
                                <div class="flex gap-x-2">
                                    <p>{{$category->title}}</p>
                                    <input type="checkbox" name="categories[]" value="{{$category->id}}" id="categories" class="w-4 cursor-pointer rounded outline-0 border border-gray-400">
                                </div>
                            @endforeach
                            @error('categories')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Update" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-[55%] h-full flex flex-col items-end pr-10">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="summary" class="font-semibold ml-5">: summary</label>
                            <textarea name="summary" id="summary" cols="10" rows="10" class="w-2/5 h-28 rounded outline-0 p-2 border border-gray-400">{{$book->summary}}</textarea>
                            @error('summary')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="price" class="font-semibold ml-5">: price</label>
                            <input type="number" name="price" min="10" max="20000" value="{{$book->price}}" id="price" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('price')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="stock" class="font-semibold ml-5">: stock</label>
                            <input type="number" name="stock" min="0" max="200" value="{{$book->stock}}" id="stock" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('stock')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="authors" class="font-semibold ml-5">: authors</label>
                            @foreach($authors as $author)
                                <div class="flex gap-x-2">
                                    <p>{{$author->firstName}} {{$author->lastName}}</p>
                                    <input type="checkbox" name="authors[]" value="{{$author->id}}" id="authors" class="w-4 cursor-pointer rounded outline-0 border border-gray-400">
                                </div>
                            @endforeach
                            @error('authors')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
