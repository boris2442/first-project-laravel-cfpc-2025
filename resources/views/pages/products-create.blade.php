@extends('layouts.website.layout-website')
@section(section: 'content')
    <div class="container mx-auto max-w-xl shadow py-4 px-10">
        <a href="index.html" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Go Back</a>
        <div class="my-3">
            <h1 class="text-center text-3xl font-bold">Create Product</h1>
            <form action="" method="POST">
               
                <div class="my-2">
                    <label for="" class="text-md font-bold">Product Name</label>
                    <input type="text" value="" name="title" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                   
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Category</label>
                    <input type="text" value="" name="category" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                   
                </div>
                <div class="my-2 ">
                    <label for="" class="text-md font-bold">Enter your Price</label>
                    <input type="text" value="" name="price" class="block w-full border border-emerald-500 outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                   
                </div>

                <button class="px-5 py-1 bg-emerald-500 rounded-md text-black text-lg shadow-md">Create</button>
            </form>
        </div>
    </div>
 
@endsection()