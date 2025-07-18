@extends('layouts.website.layout-website')
@section('content')
    <div class="container mx-auto max-w-xl shadow py-4 px-10">
        <a href="{{ route('products.index') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Edit product Edit </h1>
            <form
             action="{{ route('products.update', $product->id) }}"
             method="POST"
             >
                @csrf
                @method('PATCH')
                <div class="my-2">
                    <label for="title" class="text-md font-bold">Product Name</label>
                    <input type="text" id="title" value="{{ $product->title }}" name="title"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2">

                    @error('title')
                        <span class='text-red-500'>{{ $message }}</span>
                    @enderror('title')

                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Category</label>
                    <input type="text" value="{{ $product->category }}" name="category"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2">
                    @error('category')
                        <span class='text-red-500'>{{ $message }}</span>
                    @enderror('category')


                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Enter your Price</label>
                    <input type="text" value="{{ $product->price }}" name="price"
                        class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2">
                    @error('price')
                        <span class='text-red-500'>{{ $message }}</span>
                    @enderror('price')


                </div>

                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Update</button>
            </form>
        </div>
    </div>
@endsection
