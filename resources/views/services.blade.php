<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>

<body>

    {{-- Header Section --}}
    <header class="text-white body-font  bg-gradient-to-t from-[#1F2937] to-cyan-400">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="ml-3 text-xl text-white">FamilyMart</span>
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a href="{{ route('home_page') }}"
                    class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Home</a>
                <a href="{{ route('service_page') }}"
                    class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Services</a>
                <a href="{{ route('about_page') }}"
                    class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">About</a>
                <a href="{{ route('contact_page') }}"
                    class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Contact Us</a>
                <a href="{{ route('sign_in') }}"
                    class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Sign In</a>
            </nav>
            <button href="{{ route('sign_up') }}"
                class="inline-flex transition duration-300 hover:scale-110 rounded-md items-center bg-transparent border-2 border-white shadow-sm shadow-black font-bold py-1 px-3 hover:bg-gradient-to-r hover:from-cyan-400 hover:via-cyan-500 hover:to-blue-400 focus:outline-none text-base mt-4 md:mt-0">Sign
                Up
            </button>
        </div>
    </header>

    {{-- Info Bar Section --}}

    <section class="text-white body-font bg-[#1F2937]">
        <div class="container px-5 py-10 mx-auto">
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">23.7K</h2>
              <p class="leading-relaxed">Sales</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">1.8K</h2>
              <p class="leading-relaxed">Products</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">35</h2>
              <p class="leading-relaxed">Customers</p>
            </div>
            <div class="p-4 sm:w-1/4 w-1/2">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-white">3.8k</h2>
              <p class="leading-relaxed">Profit</p>
            </div>
          </div>
        </div>
      </section>

    {{-- Service Section --}}

      {{-- Categoire One --}}
    <section class="text-gray-600 body-font">
        <div class="font-bold text-center text-transparent bg-clip-text text-6xl bg-[#1F2937] py-6">Categories</div>
        <div class="container mx-auto flex px-5 py-12 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium text-gray-900">
                Stationary Items
            </h1>
            <p class="mb-8 leading-relaxed">“Sometimes, when it’s going badly, she wonders if what she believes to be a love of the written word is really just a fetish for stationery. The true writer, the born writer, will scribble words on scraps of litter, the back of a bus tickets, on the wall of a cell. Emma is lost on anything less than 120gsm.”
                ― <span class="font-bold">  David Nicholls</span>, One Day    <div class="flex justify-center">
                <button class="ml-4 inline-flex text-white transition duration-200 hover:scale-110 bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-500 rounded text-lg">
                    Go To Page
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-center"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded transition duration-300 hover:scale-105" alt="hero" src="https://www.fermoylens.ie/wp-content/uploads/2019/07/stationary-2.jpg">
          </div>
        </div>
      </section>

      {{-- Categorie Two --}}

      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded transition duration-200 hover:scale-110" alt="hero" src="https://thumbs.dreamstime.com/b/makeup-brush-cosmetics-set-white-background-isolated-decorative-31765537.jpg">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium text-gray-900">Cosmetic Items
            </h1>
            <p class="mb-8 leading-relaxed">“Fenty Beauty was created for everyone: for women of all shades, personalities, attitudes, cultures, and races. I wanted everyone to feel included. That’s the real reason I made this line.” –<span class="font-bold"> Rihanna</span></p>
            <div class="flex justify-center">
              <button class="inline-flex hover:bg-red-500 text-white transition duration-200 hover:scale-105 bg-orange-500 border-0 py-2 px-6 focus:outline-none rounded text-lg">
                Go To Page 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-center"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

      
      {{-- Categoire Three --}}
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium text-gray-900">
                Bakery Items
            </h1>
            <p class="mb-8 leading-relaxed">"Baking makes me focus....On weighing the sugar....On sieving the flour. I find it calming and rewarding because, in fairness, it is sort of magic - you start off with all this disparate stuff, such as butter and eggs, and what you end up with is so totally different. And also delicious."
                — <span class="font-bold">Marian Keyes</span>.   <div class="flex justify-center">
                <button class="ml-4 inline-flex text-white transition duration-200 hover:scale-105 bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-500 rounded text-lg">
                    Go To Page
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-center"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded transition duration-200 hover:scale-110" alt="hero" src="https://st2.depositphotos.com/1593759/10666/i/950/depositphotos_106668996-stock-photo-bread-and-flour-products-isolated.jpg">
          </div>
        </div>
      </section>

      {{-- Categorie Four --}}

      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 md:flex-row flex-col items-center">
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded transition duration-200 hover:scale-110" alt="hero" src="https://s3.envato.com/files/302545434/IMG_0359-Edit_20161019.jpg">
          </div>
          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium text-gray-900">Biscuit Items
            </h1>
            <p class="mb-8 leading-relaxed">"I love food: biscuits and gravy, cheese grits, spaghetti and meatballs, chicken-fried steak with white gravy... but my favorite dish is my wife's beanie weenie cornbread casserole. It's so good. It sounds stupid, but if you eat it, it's heaven. Of course, it's only something you can eat if you've got a lot of money." – <span class="font-bold"> Larry the cable guy</span></p>
            <div class="flex justify-center">
              <button class="inline-flex hover:bg-red-500 text-white transition duration-200 hover:scale-105 bg-orange-500 border-0 py-2 px-6 focus:outline-none rounded text-lg">
                Go To Page 
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-center"  fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>

    {{-- Footer Section --}}

    <footer class="text-white body-font bg-gradient-to-b from-[#1F2937] via-cyan-500 to-blue-400">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="ml-3 text-xl">FamilyMart</span>
                </a>
                <p class="mt-2 text-sm text-white">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4 ">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">
                        Stationary</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Registers</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Books</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Pen Ink</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Pencil</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Cosmetics
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Golden Pearl</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Face Fresh</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Care Lotion</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Hair Color</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Bakery
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Shiri Bun</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Fruit Cake</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Bread</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Cake Rus</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Biscuits
                    </h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Super Choclate</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Peanut Party</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Prince</a>
                        </li>
                        <li>
                            <a class="text-white hover:text-white cursor-pointer">Zera Plus</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-cyan-600">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-white text-sm text-center sm:text-left">© 2022 FamilyMart —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-white ml-1"
                        target="_blank">@FamilyMart</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-white">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5"
                                ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-white">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>


</body>

</html>
