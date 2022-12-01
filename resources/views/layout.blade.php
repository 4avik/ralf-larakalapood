<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap bg-yellow-600 p-10">
        <div class="flex items-center flex-shrink-0 text-white mr-7">
        <link rel="icon" type="image/x-icon" href="images/fish icon.png">
          <span class="font-semibold text-4xl tracking-tight">Fishshop</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-Zinc-900 border-Zinc-900 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="flex text-xl justify-center lg:flex-grow">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-Zinc-900 hover:text-white mr-4">
              link1
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-Zinc-900 hover:text-white mr-4">
              link2
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-Zinc-900 hover:text-white">
              link3
            </a>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 hover:text-white mr-4">
                <a href="#"></a>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
              </svg>
              
            <!-- <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0"><i class="fa-regular fa-bag-shopping"></a> -->
          </div>
        </div>
    </nav>
      <!-- main page -->
      <!-- cards -->
      

    <div class="relative">
        
        <img class="w-full absolute top-0 left-0" src="/images/sand.jpg" alt="sand background">
        <img class="absolute flex justify-center top-0 left-0 mt-[3%] ml-[25%] h-[500px] w-[850px]" src="/images/fishpic.jpg" alt="main img">
        <img class="w-full absolute top-0 left-0 mt-[34%] shadow-md" src="/images/water.._00000.png" alt="water wave">

        <div class="absolute top-0 left-0 mt-[60%] p-10 m-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
          <!--Card 1-->
          <a href="#">
            <div class="overflow-hidden shadow-lg bg-white transform transition duration-500 hover:scale-105 drop-shadow-2xl">
              <img class="w-full" src="/images/fishpic.jpg" alt="">
              <div class="px-6 py-4">
                <div class="font-bold text-2xl mb-2 hover:underline decoration-sky-500">Kala 1</div>
                <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
                <br>
                <div class="font-bold text-2xl mb-2">17.50 €</div>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
              </div>
            </div>
          </a>
          <!--Card 2-->
          <a href="#">
            <div class="rounded overflow-hidden shadow-lg bg-white transform transition duration-500 hover:scale-105 drop-shadow-2xl">
              <img class="w-full" src="/images/fishpic.jpg" alt="">
              <div class="px-6 py-4">
                <div class="font-bold text-2xl mb-2 hover:underline decoration-sky-500">Kala 2</div>
                <p class="text-gray-700 text-base">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
                <br>
                <div class="font-bold text-2xl mb-2">3.00 €</div>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
              </div>
            </div>
          </a>
          <!--Card 3-->
          <a href="#">
            <div class="rounded overflow-hidden shadow-lg bg-white transform transition duration-500 hover:scale-105 drop-shadow-2xl">
                <img class="w-full" src="/images/fishpic.jpg" alt="">
              <div class="px-6 py-4">
                <div class="font-bold text-2xl mb-2 hover:underline decoration-sky-500">Kala 3</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
                <br>
                <div class="font-bold text-2xl mb-2">15.00 €</div>
              </div>
              <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#</span>
              </div>
            </div>
          </a>
        </div>
    </div>

      
</body>
</html>