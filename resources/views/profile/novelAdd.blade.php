@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">

    <div class="bg-black-2 h-auto py-[0.8rem] rounded-[10px] mt-[1rem] text-center">
        <div class="flex relative px-[0.8rem] text-center">
            <p class="font-ptserif font-bold text-[1.4rem] text-white">Novel Mu</p>
        </div>
        <div class="mt-[1rem] relative">
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
                <div class="bg-gray-300 h-[8.5rem] w-[6rem] relative z-10 rounded-[10px] shadow-gray-700 shadow-inner flex items-center justify-center">
                    <i class='bx bx-add-to-queue text-[2rem]'></i>       
                </div>                              
            </div>
        </div>                      
    </div>

</section>
@endsection