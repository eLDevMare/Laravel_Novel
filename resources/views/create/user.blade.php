@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">
    <div class="bg-gradient-to-b from-black-3 to-black-4 h-auto p-[0.8rem] rounded-[10px] relative">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="max-w-md mx-auto p-4">
                <div
                class="w-full rounded-sm bg-cover bg-center bg-no-repeat items-center">
                <div class="mx-auto flex justify-center">
                    <img src="" id="previewImage" class="mr-[-8.6rem] rounded-full w-[120px] h-[120px] bg-transparent border-black border-[1px] bg-cover bg-center bg-no-repeat" alt>
                    <div class="bg-white/90 rounded-full w-6 h-6 text-center ml-28 mt-4">
                        <input type="file" name="image" id="upload_profile" hidden >
                        <label for="upload_profile">
                                <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none"
                                    stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z">
                                    </path>
                                </svg>
                            </label>
                    </div>
                </div>
            </div>
                <div class="mt-5">
                    <label class="block text-gray-400 mb-2">Username</label>
                    <input type="text" placeholder="" class="w-full bg-black-3 text-gray-300 p-2 rounded-md border border-gray-600">
                </div>
                <div class="mt-4">
                    <label class="block text-gray-400 mb-2">Email</label>
                    <input type="text" placeholder="" class="w-full bg-black-3 text-gray-300 p-2 rounded-md border border-gray-600">
                </div>
                <div class="mt-4">
                    <label class="block text-gray-400 mb-2">No. Handphone</label>
                    <input type="text" placeholder="Optional" class="w-full bg-black-3 text-gray-300 p-2 rounded-md border border-gray-600">
                    <div class="mt-[2rem] px-[3rem] text-center">
                        <button type="submit" class="w-full bg-gray-800 text-gray-300 p-2 rounded-md border border-gray-600">Simpan</button>
                    </div>
                </div>
                

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        </div>
        </form>
</section>

<script>
    document.getElementById('upload_profile').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const previewImage = document.getElementById('previewImage');
    
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
        }
        
        reader.readAsDataURL(file);
    } else {
        previewImage.src = '';
        previewImage.style.display = 'none'; 
    }
});


document.getElementById('previewImage').addEventListener('click', function() {
    document.getElementById('upload_profile').click();
}); 
</script>
@endsection