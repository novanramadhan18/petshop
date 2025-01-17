@extends('layouts.user')
@section('title', 'Indira Petshop')
@section('content')
<div class="relative">
    <img class="w-full h-screen object-cover" src="{{asset('img/cat3.jpg')}}" alt="">
    <div class="flex flex-col absolute bottom-1/3 left-[15%] gap-y-3">
        <h3 class="text-white font-semibold font-jost text-sm">
            WELCOME TO INDIRA PETSHOP
        </h3>
        <h1 class="text-white font-semibold font-jost text-5xl">
            All the Love
        </h1>
        <h3 class="text-white font-semibold font-jost text-2xl">
            your pet deserves!
        </h3>
        <button class="btn-primary w-fit">
            Shop Now
        </button>
    </div>
</div>
<div class="w-full max-w-6xl flex flex-col py-16 gap-y-8 mx-auto">
        <p class="title">Shop by Categories</p>
    <div class="w-full h-32 shadow-lg rounded-md border">
    </div>
    <div class="w-full max-w-6xl flex flex-col py-5 gap-y-8 mx-auto">
        <p class="title">Our Products</p>
        <div class="flex gap-x-8 max-w-6xl mx-auto">
            <div class="w-40 h-56 shadow-lg rounded-md border"></div>
            <div class="w-40 h-56 shadow-lg rounded-md border"></div>
            <div class="w-40 h-56 shadow-lg rounded-md border"></div>
            <div class="w-40 h-56 shadow-lg rounded-md border"></div>
            <div class="w-40 h-56 shadow-lg rounded-md border"></div>
            <div class="w-40 h-56 shadow-lg rounded-md border"></div>
        </div>
    </div>
@endsection