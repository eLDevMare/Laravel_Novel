@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">

    <div class="bg-black-2 py-[0.8rem] pb-[2rem] rounded-[10px] mt-[1rem] text-center h-full relative">
        <div class="flex flex-col items-center gap-1 relative py-[0.5rem] justify-center text-center">
            <div class="h-[6rem] w-[6rem] rounded-full flex justify-center items-center">
                <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="h-full w-full object-cover rounded-full">
            </div>
            <div class="text-white relative mt-[0.2rem] block text-center">
                <p class="text-[1.2rem]">El Rakkai Omar Wahid</p>
                <p class="text-[0.7rem] text-gray-500">827730208320</p>
            </div>
        </div>        

        <hr class="border-t border-white my-4">

        <div class="grid grid-cols-3 justify-center items-center gap-4 px-[0.8rem]">
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>
            <div class="">
                <div class="h-[8.5rem] w-[6rem] relative">
                    <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                </div>           
            </div>                           
        </div>
    </div>

</section>
@endsection