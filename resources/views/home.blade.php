<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{URL::asset('/public/css/doc_fav.png')}}" type="image/png">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Home</title>
</head>

<body class="" >
    {{-- Header Section --}}
    <header class="text-white body-font bg-gradient-to-t from-[#006470] to-cyan-400">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0 cursor-pointer">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              <span class="ml-3 text-xl text-gray\
              ">FamilyMart</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
              <a href="{{route("home_page")}}" class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Home</a>
              <a href="{{route('service_page')}}" class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Services</a>
              <a href="{{route('about_page')}}" class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">About</a>
              <a href="{{route('contact_page')}}" class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Contact Us</a>
              <a href="{{route('sign_in')}}" class="mr-5 cursor-pointer transition duration-300 hover:scale-125 hover:text-white">Sign In</a>
          </nav>
          <button href="{{route('sign_up')}}"
              class="inline-flex transition duration-300 hover:scale-110 rounded-md items-center bg-transparent border-2 border-white shadow-sm shadow-black font-bold py-1 px-3 hover:bg-gradient-to-r hover:from-cyan-400 hover:via-cyan-500 hover:to-blue-400 focus:outline-none text-base mt-4 md:mt-0">Sign
              Up
          </button>
      </div>
  </header>

    {{-- Background Image Section --}}

    <div class="relative shadow-2xl shadow-[#D5CCC3]">
      <img src="/img/familymart_view.jpg" class="bg-local overflow-scroll" alt="Sea Image">
      <h1 class="absolute text-5xl text-white font-bold cursor-auto hidden md:flex trasition duration-300 hover:scale-105 top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2">
        The Best Family Mart</h1>
    </div>
    

    {{-- Items Section --}}

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-fill object-center w-full h-full block" src="https://us.123rf.com/450wm/belchonock/belchonock2005/belchonock200500133/145953695-maternity-bag-with-disposable-diapers-and-child-s-accessories-on-white-background.jpg?ver=6https://babynestboutique.com/wp-content/uploads/2019/10/Portable-Diaper-Bag-Pink-Unicorn-250x250.jpeg">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">School Bag</h2>
              <p class="mt-1">$16.00</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://sc04.alicdn.com/kf/UTB8ncYwuODEXKJk43Oq763z3XXaK.png">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">Face Fresh</h2>
              <p class="mt-1">$2.15</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-fill object-center w-full h-full block" src="https://i.pinimg.com/originals/7a/a2/17/7aa217c5a3bbeffd7f21c044764dc3c7.jpg">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">Acer Laptop</h2>
              <p class="mt-1">$519.99</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://picsum.photos/423/263?books">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
              <p class="mt-1">$18.40</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://picsum.photos/424/264?eggs">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
              <p class="mt-1">$16.00</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://picsum.photos/425/265?soap">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
              <p class="mt-1">$21.15</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://picsum.photos/427/267?oil">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
              <p class="mt-1">$12.00</p>
            </div>
          </div>
          <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:shadow-lg hover:scale-105 transition duration-300">
            <a class="block relative h-48 rounded overflow-hidden">
              <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://picsum.photos/428/268?Bakery">
            </a>
            <div class="mt-4">
              <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
              <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
              <p class="mt-1">$18.40</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- Blog Section --}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-10 mx-auto">
          <div class="font-bold text-center text-transparent bg-clip-text text-5xl bg-gradient-to-r from-cyan-400 via-cyan-500 to-blue-400 to--500 py-6">Our Best Deals</div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3 hover:shadow-lg hover:scale-105 transition duration-300">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://picsum.photos/720/400?water" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3 hover:shadow-lg hover:scale-105 transition duration-300">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://picsum.photos/720/401?earth" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <div class="flex items-center flex-wrap">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-4 md:w-1/3 hover:shadow-lg hover:scale-105 transition duration-300">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://picsum.photos/720/402?flair" alt="blog">
                <div class="p-6">
                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                  <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                      <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                      </svg>6
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    {{-- Footer Section --}}

    <footer class="text-white body-font bg-gradient-to-b from-white via-cyan-600 to-blue-700">
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
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Stationary</h2>
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
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Cosmetics</h2>
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
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Bakery</h2>
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
                    <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3 cursor-pointer">Biscuits</h2>
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
