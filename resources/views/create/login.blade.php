<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-black-1 flex items-center justify-center min-h-screen">
  <div class="bg-gradient-to-b from-black-3 to-black-4 p-8 rounded-lg shadow-lg w-80">
   <h2 class="text-white text-2xl font-semibold text-center mb-2">
    Welcome Back
   </h2>
   <p class="text-gray-400 text-center mb-6">
    Don't have an account yet?
    <a class="text-blue-500" href="#">
     Sing up
    </a>
   </p>
   <form>
    <div class="mb-2">
     <label class="block text-gray-400 mb-2" for="email">
      <i class="fas fa-envelope">
      </i>
      Username
     </label>
     <input class="w-full p-[0.6rem] rounded bg-black-2 shadow-inner shadow-black text-white focus:outline-none" id="email" placeholder="Username" type="text"/>
    </div>
    <div class="mb-2">
      <label class="block text-gray-400 mb-2" for="email">
       <i class="fas fa-envelope">
       </i>
       Email Address
      </label>
      <input class="w-full p-[0.6rem] rounded bg-black-2 shadow-inner shadow-black text-white focus:outline-none" id="email" placeholder="Email address" type="email"/>
     </div>
     <div class="mb-10">
      <label class="block text-gray-400 mb-2" for="email">
       <i class="fas fa-envelope">
       </i>
       Password
      </label>
      <input class="w-full p-[0.6rem] rounded bg-black-2 shadow-inner shadow-black text-white focus:outline-none" id="email" placeholder="Password" type="password"/>
     </div>
    <button class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-200">
     Login
    </button>
   </form>
  </div>
 </body>
</html>