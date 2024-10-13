@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">

    <div class="bg-gradient-to-b from-black-3 to-black-4 h-auto p-[0.8rem] rounded-[10px]">
        <div class="flex relative">
            <p class="font-ptserif font-bold text-[1.4rem] text-white">Rekomendasi</p>
            <a href="" class=" text-slate-500 text-[1.3rem] px-0 py-0 bg-transparent outline-none absolute right-4">></a>            
        </div>
        <div class="flex mt-[1rem]">
            <div class="gap-3 flex overflow-x-auto">
                <div>
                    <div class="h-[11rem] w-[8.2rem] ">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[1rem] leading-[1.1rem] font-semibold text-white">Pembunuh muda kembali</p>
                        <p class="text-[0.8rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div>
                    <div class="h-[11rem] w-[8.2rem] ">
                        <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>              
                </div>
                <div>
                    <div class="h-[11rem] w-[8.2rem] ">
                        <img src="{{ asset('image/photonovelbodysnatchers.png') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>              
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-black-2 h-auto p-[0.8rem] rounded-[10px] mt-[1rem]">
        <div class="flex relative">
            <p class="font-ptserif font-bold text-[1.4rem] text-white">Terpopuler</p>
        </div>
        <div class="mt-[1rem]">
            <div class="gap-5 grid grid-cols-2 overflow-x-auto">
                <div class="flex">
                    <div class="h-[5.5rem] w-[7rem] relative">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[5px]">
                        <div class="bg-yellow-300 absolute top-0 right-0 text-center rounded-bl-[5px] px-[0.2rem]">
                            <p  class="text-[0.5rem]">Top</p>
                            <p class="text-[0.7rem] font-kanit mt-[-0.2rem] font-semibold">1</p>
                        </div>
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[0.8rem] leading-[1.1rem] font-semibold text-white">Jiwa bela diri yang...</p>
                        <p class="text-[0.7rem] mt-[0.1rem] text-gray-500">Iko Uwais</p>
                        <p class="text-[0.6rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex">
                    <div class="h-[5.5rem] w-[7rem] relative">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[5px]">
                        <div class="bg-yellow-300 absolute top-0 right-0 text-center rounded-bl-[5px] px-[0.2rem]">
                            <p  class="text-[0.5rem]">Top</p>
                            <p class="text-[0.7rem] font-kanit mt-[-0.2rem] font-semibold">1</p>
                        </div>
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[0.8rem] leading-[1.1rem] font-semibold text-white">Jiwa bela diri yang...</p>
                        <p class="text-[0.7rem] mt-[0.1rem] text-gray-500">Iko Uwais</p>
                        <p class="text-[0.6rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex">
                    <div class="h-[5.5rem] w-[7rem] relative">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[5px]">
                        <div class="bg-yellow-300 absolute top-0 right-0 text-center rounded-bl-[5px] px-[0.2rem]">
                            <p  class="text-[0.5rem]">Top</p>
                            <p class="text-[0.7rem] font-kanit mt-[-0.2rem] font-semibold">1</p>
                        </div>
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[0.8rem] leading-[1.1rem] font-semibold text-white">Jiwa bela diri yang...</p>
                        <p class="text-[0.7rem] mt-[0.1rem] text-gray-500">Iko Uwais</p>
                        <p class="text-[0.6rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex">
                    <div class="h-[5.5rem] w-[7rem] relative">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[5px]">
                        <div class="bg-yellow-300 absolute top-0 right-0 text-center rounded-bl-[5px] px-[0.2rem]">
                            <p  class="text-[0.5rem]">Top</p>
                            <p class="text-[0.7rem] font-kanit mt-[-0.2rem] font-semibold">1</p>
                        </div>
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[0.8rem] leading-[1.1rem] font-semibold text-white">Jiwa bela diri yang...</p>
                        <p class="text-[0.7rem] mt-[0.1rem] text-gray-500">Iko Uwais</p>
                        <p class="text-[0.6rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex">
                    <div class="h-[5.5rem] w-[7rem] relative">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[5px]">
                        <div class="bg-yellow-300 absolute top-0 right-0 text-center rounded-bl-[5px] px-[0.2rem]">
                            <p  class="text-[0.5rem]">Top</p>
                            <p class="text-[0.7rem] font-kanit mt-[-0.2rem] font-semibold">1</p>
                        </div>
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[0.8rem] leading-[1.1rem] font-semibold text-white">Jiwa bela diri yang...</p>
                        <p class="text-[0.7rem] mt-[0.1rem] text-gray-500">Iko Uwais</p>
                        <p class="text-[0.6rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex">
                    <div class="h-[5.5rem] w-[7rem] relative">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[5px]">
                        <div class="bg-yellow-300 absolute top-0 right-0 text-center rounded-bl-[5px] px-[0.2rem]">
                            <p  class="text-[0.5rem]">Top</p>
                            <p class="text-[0.7rem] font-kanit mt-[-0.2rem] font-semibold">1</p>
                        </div>
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[0.8rem] leading-[1.1rem] font-semibold text-white">Jiwa bela diri yang...</p>
                        <p class="text-[0.7rem] mt-[0.1rem] text-gray-500">Iko Uwais</p>
                        <p class="text-[0.6rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black-2 h-auto p-[0.8rem] rounded-[10px] mt-[1rem]">
        <div class="flex relative">
            <p class="font-ptserif font-bold text-[1.4rem] text-white">Terbaru</p>
            <a href="" class=" text-slate-500 text-[1.3rem] px-0 py-0 bg-transparent outline-none absolute right-4">></a>            
        </div>
        <div class="mt-[1rem]">
            <div class="block">
                <div class="flex mt-[0.5rem]">
                    <div class="h-[9.5rem] w-[24rem] relative">
                        <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="pl-[0.8rem] mt-[0.7rem]">
                        <p class="text-[1rem] leading-[1.1rem] font-semibold text-white">Bangkit Kembali Bersama.</p>
                        <p class="text-[0.8rem] mt-[0.1rem] text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quidem reprehenderit sed, dicta excepturi vel</p>
                        <p class="text-[0.9rem] mt-[0.5rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex mt-[0.5rem]">
                    <div class="h-[9.5rem] w-[24rem] relative">
                        <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="pl-[0.8rem] mt-[0.7rem]">
                        <p class="text-[1rem] leading-[1.1rem] font-semibold text-white">Bangkit Kembali Bersama.</p>
                        <p class="text-[0.8rem] mt-[0.1rem] text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quidem reprehenderit sed, dicta excepturi vel</p>
                        <p class="text-[0.9rem] mt-[0.5rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div class="flex mt-[0.5rem]">
                    <div class="h-[9.5rem] w-[24rem] relative">
                        <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="pl-[0.8rem] mt-[0.7rem]">
                        <p class="text-[1rem] leading-[1.1rem] font-semibold text-white">Bangkit Kembali Bersama.</p>
                        <p class="text-[0.8rem] mt-[0.1rem] text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quidem reprehenderit sed, dicta excepturi vel</p>
                        <p class="text-[0.9rem] mt-[0.5rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
            </div>
        </div>
    </div>

    <div class="bg-black-2 h-auto p-[0.8rem] rounded-[10px] mt-[1rem]">
        <div class="flex relative">
            <p class="font-ptserif font-bold text-[1.4rem] text-white">Genre</p>
            <select class="w-[7rem] text-slate-500 text-sm px-0 py-0 bg-transparent outline-none absolute right-0 mt-[0.4rem]" name="kategory" required>
                <option value="Penghargaan" class="text-[0.6rem]">Penghargaan</option>
                <option value="Pengumuman" class="text-[0.6rem]">Pengumuman</option>
                <option value="Promo" class="text-[0.6rem]">Promo</option>
                <option value="Siaran Pers" class="text-[0.6rem]">Siaran Pers</option>
            </select>      
        </div>
        <div class="flex mt-[1rem]">
            <div class="gap-3 flex overflow-x-auto">
                <div>
                    <div class="h-[11rem] w-[8.2rem] ">
                        <img src="{{ asset('image/gadis_kretek.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>
                    <div class="px-[0.5rem] mt-[0.5rem]">
                        <p class="text-[1rem] leading-[1.1rem] font-semibold text-white">Pembunuh muda kembali</p>
                        <p class="text-[0.8rem] mt-[0.2rem] text-gray-500">Fantasy</p>
                    </div>              
                </div>
                <div>
                    <div class="h-[11rem] w-[8.2rem] ">
                        <img src="{{ asset('image/tikungan_maut.jpg') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>              
                </div>
                <div>
                    <div class="h-[11rem] w-[8.2rem] ">
                        <img src="{{ asset('image/photonovelbodysnatchers.png') }}" alt="" class="w-full h-full object-cover rounded-[10px]">
                    </div>              
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection