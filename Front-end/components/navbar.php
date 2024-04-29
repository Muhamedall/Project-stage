<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="./app.js"></script>

</head>
<body>


</div>


  <!-- component -->
<header class="bg-green-50 header sticky top-0  shadow-md flex items-center justify-between px-8 py-02">
    <!-- logo -->
   

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
        <ul class="flex items-center text-sm">
            <li class="p-4 border-b-2 border-emerald-600 border-opacity-0 hover:border-opacity-100 hover:text-emerald-600 duration-200 cursor-pointer">
              <a href="">Homepages</a>
            </li>
            <li class="p-4 border-b-2 border-emerald-600 border-opacity-0 hover:border-opacity-100 hover:text-emerald-600 duration-200 cursor-pointer">
              <a href="">About</a>
           


             
            </li>
            <li class="p-4 border-b-2 border-emerald-600 border-opacity-0 hover:border-opacity-100 hover:text-emerald-600 duration-200 cursor-pointer">
              <a href="">Categories</a>
            </li>
           
        </ul>
    </nav>
    <div class="flex flex-row">
        <h1 class="text-slate-50 bg-emerald-600 text-xl">Diaa</h1><span class="text-sm mt-[7px]">blog</span>
    </div>

    <!-- buttons --->
    <div class=" flex flex-row gap-2">
      <ul class="flex items-center text-sm font-semibold ">
    <li class="p-4 border-b-2 border-emerald-600 border-opacity-0 hover:border-opacity-100 hover:text-emerald-600 duration-200 cursor-pointer">
              <a href="">Contact</a>
            </li>
            </ul>
        <a href="">
        <svg class="border-b-2 border-emerald-600 border-opacity-0 hover:border-opacity-100 hover:text-emerald-600 duration-200 cursor-pointer" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="50" viewBox="0 0 50 50">
<path d="M 21 3 C 11.601563 3 4 10.601563 4 20 C 4 29.398438 11.601563 37 21 37 C 24.355469 37 27.460938 36.015625 30.09375 34.34375 L 42.375 46.625 L 46.625 42.375 L 34.5 30.28125 C 36.679688 27.421875 38 23.878906 38 20 C 38 10.601563 30.398438 3 21 3 Z M 21 7 C 28.199219 7 34 12.800781 34 20 C 34 27.199219 28.199219 33 21 33 C 13.800781 33 8 27.199219 8 20 C 8 12.800781 13.800781 7 21 7 Z"></path>
</svg>   
        </a>
        <select>
          <option>En</option>
          <option>Fr</option>
        </select>
   
    </div>

</header>
<?php include "content.php" ?>


</body>
</html>