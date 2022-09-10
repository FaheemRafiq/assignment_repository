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
            <a href="{{route("home_page")}}" id="{{$id}}" class="mr-5 cursor-pointer">Home</a>
            <a href="{{route('service_page')}}"           class="mr-5 cursor-pointer">Services</a>
            <a href="{{route('about_page')}}"             class="mr-5 cursor-pointer">About</a>
            <a href="{{route('contact_page')}}"           class="mr-5 cursor-pointer">Contact Us</a>
            <a href="{{route('sign_in')}}"                class="mr-5 cursor-pointer">Sign In</a>
        </nav>
        <a href="{{route('sign_up')}}"
            class="inline-flex transition duration-300 hover:scale-110 rounded-md items-center bg-transparent border-2 border-white shadow-sm shadow-black font-bold py-1 px-3 hover:bg-gradient-to-r hover:from-cyan-400 hover:via-cyan-500 hover:to-blue-400 focus:outline-none text-base mt-4 md:mt-0">Sign
            Up
      </a>
    </div>
</header>
<style>
    #active{
        border-bottom: 2px solid rgb(255, 255, 255);
    }
    .mr-5:hover{
        border-bottom: 3px solid rgb(255, 255, 255);
    }
</style>