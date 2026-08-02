@extends('layout.app')
@section('title')
    add author
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add author</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('authors.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-[45%] h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="firstName" class="font-semibold ml-5">: firstName</label>
                            <input type="text" name="firstName" value="{{old('firstName')}}" id="firstName" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('firstName')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lastName" class="font-semibold ml-5">: lastName</label>
                            <input type="text" name="lastName" value="{{old('lastName')}}" id="lastName" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('lastName')
                                <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="birthYear" class="font-semibold ml-5">: birth year</label>
                            <select name="birthYear" id="birthYear" class="w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @for($i=2026;$i>=1930;$i--)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @error('birthYear')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-[55%] h-full flex flex-col items-end pr-10">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="biography" class="font-semibold ml-5">: biography</label>
                            <textarea name="biography" id="biography" cols="10" rows="10" class="w-2/5 h-28 rounded outline-0 p-2 border border-gray-400"></textarea>
                            @error('biography')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="birthCountry" class="font-semibold ml-5">: birthCountry</label>
                            <input type="text" name="birthCountry" value="{{old('birthCountry')}}" id="birthCountry" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('birthCountry')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
