@php use Carbon\Carbon; @endphp

@extends('layout-2')
@section('content')

<div class=" text-white font-sans bg-black-2 rounded-[10px] h-auto relative">
    <div class="absolute right-2 top-1">
        <i class='bx bx-menu text-[2.5rem] text-gray-200'></i>
    </div>
    <div class="max-w-md mx-auto p-4 pt-[2rem]">
     <div class="flex items-center justify-between mb-4">
      <i class="fas fa-arrow-left text-xl">
      </i>
      <div class="text-center">
       <i class="fas fa-check-circle text-blue-500">
       </i>
      </div>
      <i class="fas fa-ellipsis-h text-xl">
      </i>
     </div>
     <!-- Profile Info -->
     <div class="flex items-center mb-2">
      <img alt="Profile picture of the band" class="rounded-full w-20 h-20" height="80" src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-RcpoXHkzChYnDbFAyeQ8tamr/user-ehrvabJ3DufsCu8YJ7PqY5gl/img-xU7IQbpcWoJDzSfYxplWIK7s.png?st=2024-09-27T23%3A37%3A49Z&amp;se=2024-09-28T01%3A37%3A49Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-27T18%3A22%3A35Z&amp;ske=2024-09-28T18%3A22%3A35Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=1S3PVytKtaNxI6t0uoYsu7ZoViXnNHKRTmlvj57h0vE%3D" width="80"/>
      <div class="ml-4">
       <div class="flex space-x-4">
        <div class="text-center">
         <span class="font-bold">
          593
         </span>
         <p>
          Postingan
         </p>
        </div>
        <div class="text-center">
         <span class="font-bold">
          918rb
         </span>
         <p>
          Pengikut
         </p>
        </div>
        <div class="text-center">
         <span class="font-bold">
          6
         </span>
         <p>
          Mengikuti
         </p>
        </div>
       </div>
      </div>
     </div>
     <!-- Bio -->
     <div class="mb-4">
      <h2 class="font-bold">
       I Prevail
      </h2>
      <p>
       Musisi/band
      </p>
     </div>
     <!-- Navigation -->
     <div class="flex justify-around border-t border-gray-700 py-2">
     </div>
     <!-- Posts -->
     <div class="grid grid-cols-3 justify-center items-center gap-4 px-[0.2rem]">
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
</div>
@endsection