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

    {{-- Team Section --}}

    <section class="text-white body-font bg-[#1F2937]">
        <div class="container px-5 py-16 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Our Team</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">"The way a team plays as a whole determines its
                    success. You may have the greatest bunch of individual stars in the world, but if they don’t play
                    together, the club won’t be worth a dime." - <span class="font-bold">Babe Ruth</span></p>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-300 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWVufGVufDB8fDB8fA%3D%3D&w=1000&q=80">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                            <p class="text-gray-500">UI Designer</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-200 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://img.freepik.com/premium-photo/young-handsome-man-with-beard-isolated-keeping-arms-crossed-frontal-position_1368-132662.jpg?w=2000">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
                            <p class="text-gray-500">CTO</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-100 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://images.unsplash.com/photo-1583864697784-a0efc8379f70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG1hbnxlbnwwfHwwfHw%3D&w=1000&q=80">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
                            <p class="text-gray-500">Founder</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-200 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://media.istockphoto.com/photos/smiling-indian-man-looking-at-camera-picture-id1270067126?k=20&m=1270067126&s=612x612&w=0&h=ZMo10u07vCX6EWJbVp27c7jnnXM2z-VXLd-4maGePqc=">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">John Doe</h2>
                            <p class="text-gray-500">DevOps</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-300 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://images.pexels.com/photos/1516680/pexels-photo-1516680.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Martin Eden</h2>
                            <p class="text-gray-500">Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-200 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://thumbs.dreamstime.com/b/handsome-man-hair-style-beard-beauty-face-portrait-fashion-male-model-black-hair-high-resolution-handsome-man-125031765.jpg">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Boris Kitua</h2>
                            <p class="text-gray-500">UX Researcher</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-100 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://thumbs.dreamstime.com/b/confident-black-business-man-stylish-suit-standing-folded-arms-rooftop-n-office-block-looking-camera-69650703.jpg">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Atticus Finch</h2>
                            <p class="text-gray-500">QA Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-200 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://img.freepik.com/free-photo/waist-up-portrait-handsome-serious-unshaven-male-keeps-hands-together-dressed-dark-blue-shirt-has-talk-with-interlocutor-stands-against-white-wall-self-confident-man-freelancer_273609-16320.jpg?w=2000">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Alper Kamu</h2>
                            <p class="text-gray-500">System</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center bg-cyan-300 border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Lara Monchi</h2>
                            <p class="text-gray-500">Product Manager</p>
                        </div>
                    </div>
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
