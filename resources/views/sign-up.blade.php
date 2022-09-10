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

    <div class="bg-grey-lighter min-h-screen flex flex-col shadow-xl shadow-black">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <form action="{{ url('/') }}/register" method="POST">
                @csrf
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <span style="color: rgb(231, 40, 40)">
                        @error('fullname')
                            {{$message}}
                        @enderror
                    </span>
                    <input type="text" class="peer block border border-grey-light w-full p-3 rounded mb-4"
                        name="fullname" placeholder="Full Name" required value="{{old('fullname')}}" />
                        <span style="color: rgb(231, 40, 40)">
                            @error('email')
                            {{$message}}
                        @enderror
                        @if (session('email_error'))
                            {{session('email_error')}}  
                        @endif
                        </span>
                      
                    <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Email" value="{{old('email')}}" />
                        <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password" placeholder="Password" required />
                        <span style="color: rgb(231, 40, 40)">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password" placeholder="Confirm Password" required />
                        <span style="color: rgb(231, 40, 40)">
                            @error('confirm_password')
                                {{$message}}
                            @enderror
                        </span>
                    <button type="submit"
                        class="w-full text-center py-3 rounded bg-green bg-blue-700 text-white hover:bg-green-400 focus:outline-none my-1">Create
                        Account</button>

                    <div class="text-center text-sm text-grey-dark mt-4">
                        By signing up, you agree to the
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terms of Service
                        </a> and
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Privacy Policy
                        </a>
                    </div>
                </div>
            </form>

            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue" href="{{ route('sign_in') }}">
                    Log in
                </a>.
            </div>
        </div>
    </div>

</body>

</html>
