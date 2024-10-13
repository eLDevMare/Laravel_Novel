@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">
    <div class="bg-gradient-to-b from-black-3 to-black-4 h-auto p-[0.8rem] rounded-[10px] relative">
        <form action="/search" class="max-w-[600px] w-full px-3">
            <div class="relative">
                <input type="text" name="q" class="bg-black-2 w-full border h-10 shadow p-4 rounded-[10px] dark:text-gray-400 dark:border-gray-700" placeholder="Cari ID">
                <button type="submit">
                    <svg class="text-teal-400 h-5 w-5 absolute top-2.5 right-3 fill-current dark:text-teal-300"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 56.966 56.966"
                        style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve">
                        <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</section>
@endsection