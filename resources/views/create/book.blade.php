@php use Carbon\Carbon; @endphp

@extends('layout')
@section('content')
<section class="px-[1rem] pb-[5rem] pt-[1rem] font-ptserif">
    <div class="bg-gradient-to-b from-black-3 to-black-4 h-auto p-[0.8rem] rounded-[10px] relative">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="max-w-md mx-auto p-4">
                <div class="flex justify-center mb-[2rem]">
                    <div class="mx-auto flex justify-center">
                        <img src="" id="previewImage" class="mr-[-9rem] rounded-[5px] h-[11.5rem] w-[9rem] bg-black-3 border-black border-[1px] bg-cover bg-center bg-no-repeat object-cover" alt>
                        <div class="bg-white/90 rounded-full w-6 h-6 text-center ml-28 mt-4">
                            <input type="file" name="image" id="upload_profile" hidden >
                                <label for="upload_profile">
                                    <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-400 mb-2">Judul Karya</label>
                    <input type="text" placeholder="Isi judul karya" class="w-full bg-black-3 text-gray-300 p-2 rounded-md border border-gray-600">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-400 mb-2">Deskripsi</label>
                    <textarea placeholder="Tulis Deskripsi Novel" class="w-full bg-black-3 text-gray-300 p-2 rounded-md border border-gray-600 h-32"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-400 mb-2">Jenis Karya</label>
                    <div class="flex flex-col space-y-2">
                        <select class="w-full bg-black-3 text-gray-300 p-2 rounded-md border border-gray-600 text-left">
                            <option value="" class="text-[0.7rem]" disabled selected>Genre</option>
                            <option value="Action" class="text-[0.6rem]">Action</option>
                            <option value="Adventure" class="text-[0.6rem]">Adventure</option>
                            <option value="Comedy" class="text-[0.6rem]">Comedy</option>
                            <option value="Drama" class="text-[0.6rem]">Drama</option>
                            <option value="Literary Fiction" class="text-[0.6rem]">Literary Fiction</option>
                            <option value="Science Fiction" class="text-[0.6rem]">Science Fiction</option>
                            <option value="Fantasy" class="text-[0.6rem]">Fantasy</option>
                            <option value="Romance" class="text-[0.6rem]">Romance</option>
                            <option value="Thriller" class="text-[0.6rem]">Thriller</option>
                            <option value="Horror" class="text-[0.6rem]">Horror</option>
                            <option value="Mystery" class="text-[0.6rem]">Mystery</option>
                            <option value="Historical Fiction" class="text-[0.6rem]">Historical Fiction</option>
                            <option value="Young Adult" class="text-[0.6rem]">Young Adult</option>
                            <option value="Dystopian" class="text-[0.6rem]">Dystopian</option>
                            <option value="Chick Lit" class="text-[0.6rem]">Chick Lit</option>
                            <option value="Magical Realism" class="text-[0.6rem]">Magical Realism</option>
                            <option value="Gothic" class="text-[0.6rem]">Gothic</option>
                            <option value="Epistolary" class="text-[0.6rem]">Epistolary</option>
                            <option value="Biography Fiction" class="text-[0.6rem]">Biography Fiction</option>
                            <option value="Satire" class="text-[0.6rem]">Satire</option>
                            <option value="Crime Fiction" class="text-[0.6rem]">Crime Fiction</option>
                            <option value="Comic" class="text-[0.6rem]">Comic/Graphic Novel</option>
                            <option value="Techno-thriller" class="text-[0.6rem]">Techno-thriller</option>
                            <option value="Inspirational" class="text-[0.6rem]">Inspirational</option>
                            <option value="Family Saga" class="text-[0.6rem]">Family Saga</option>
                            <option value="Alternate History" class="text-[0.6rem]">Alternate History</option>
                            <option value="Adventure Romance" class="text-[0.6rem]">Adventure Romance</option>
                            <option value="Romantic Suspense" class="text-[0.6rem]">Romantic Suspense</option>
                            <option value="Post Apocalyptic" class="text-[0.6rem]">Post-Apocalyptic</option>                            
                          </select>                      
                        </div>
                    </div>
                    <div class="mt-[2rem] px-[3rem] text-center">
                        <button type="submit" class="w-full bg-gray-800 text-gray-300 p-2 rounded-md border border-gray-600">Unggah</button>
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