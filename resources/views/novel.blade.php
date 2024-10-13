@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">
    <div class="bg-black-2 py-[0.8rem] pb-[2rem] rounded-[10px] mt-[1rem] h-full relative">
        <div class="flex flex-col items-center gap-1 relative py-[0.5rem] justify-center text-left">
            <div class="h-[11rem] w-[8rem] rounded-[10px] flex justify-center items-center">
                <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="h-full w-full object-cover rounded-[10px]">
            </div>
            <div class="flex py-[1rem] text-white gap-5">
                <div class="flex flex-col text-center">
                    <i class='bx bx-like text-[1.5rem]' ></i>
                    <p class="text-[0.7rem] mt-[-0.1rem]">Suka</p>
                </div>
                <div class="flex flex-col text-center">
                    <i class='bx bx-bookmark text-[1.5rem]'></i>
                    <p class="text-[0.7rem] mt-[-0.1rem]">Simpan</p>
                </div>
                <div class="flex flex-col text-center">
                    <i class='bx bx-book-open text-[1.5rem]' ></i>
                    <p class="text-[0.7rem] mt-[-0.1rem]">16 Bab</p>
                </div>
            </div>
            <div class="pl-[0.8rem]">
                <p class="text-[1rem] leading-[1.1rem] font-semibold text-white">Bangkit Kembali Bersama.</p>
                <p class="text-[0.8rem] mt-[0.1rem] text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, beatae. Iure neque debitis accusamus deserunt veniam, nisi soluta, quaerat numquam eveniet vero pariatur. Iure, a. Rem quos culpa a recusandae? </p>
                <p class="text-[0.9rem] mt-[0.5rem] text-gray-500">Asep Dadang</p>
            </div>              
        </div>

        <hr class="border-t border-white my-1 mx-3">

        <div class="px-[1rem] text-white">
            <div class="flex flex-col">
                <div class="flex text-gray-200 justify-between w-full py-[0.8rem] px-4">
                    <p>Novel Mu</p>
                    <i class='bx bx-book-add text-[1.5rem]'></i>
                </div>
                <hr class="border-t border-white my-1 mx-2">
            </div>
            <div class="flex flex-col">
                <div class="flex text-gray-200 justify-between w-full py-[0.8rem] px-4">
                    <p>Novel Mu</p>
                    <i class='bx bx-book-add text-[1.5rem]'></i>
                </div>
                <hr class="border-t border-white my-1 mx-2">
            </div>
            <div class="flex flex-col">
                <div class="flex text-gray-200 justify-between w-full py-[0.8rem] px-4">
                    <p>Novel Mu</p>
                    <i class='bx bx-book-add text-[1.5rem]'></i>
                </div>
                <hr class="border-t border-white my-1 mx-2">
            </div>
        </div>

    </div>

</section>
@endsection