<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <link href="{{asset('js/navbar.js')}}">
    <style type="text/css">
        @font-face {
            font-family: AileronLight;
            src: url('{{asset('/fonts/Aileron-Light.woff2')}}');
        }
        @font-face{
            font-family: Noto Sans JP;
            src: url('{{asset('/fonts/NotoSansJP-VariableFont_wght.ttf')}}');
            font-weight: 300;
        }
        </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                        abductedblack: "#212529",
                        abductedpink: "#C63D65",
                        abducteddarkpink: "#803047",
                        abducteddarkerpink: "#45232D",
                    },
                    screens: {
                        'xsm': '375px',
                    },
                    fontFamily: {
                        sans: ['AileronLight']
                    },
                    backgroundImage: {
                        'spacebg': "url('/local_images/space_bg.jpg')",
                    }
                },    
            },
        };
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Mind's Nightmare</title>
</head>
<body class="bg-spacebg flex justify-center">
    <div class="container flex items-center justify-center h-screen">
        {{-- Form --}}
        <div class="lg:w-1/2 p-8 bg-abductedpink rounded-md shadow-lg m-8">
          <h2 class="text-center text-white text-4xl text-2xl mb-8">Sign Up</h2>
          <form  class="flex flex-col" action="/users" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-white text-lg mb-2">Username:</label>
                  <input 
                  type="text" 
                  id="name" 
                  name="name" 
                  class="w-full p-2 border rounded-md" 
                  placeholder="Enter username"
                  value="{{old('name')}}">
                    @error('name')
                        <p class="text-abductedblack-500 text-ms mt-1">{{$message}}</p>
                    @enderror
                </div>
            <div class="mb-4">
            <label for="email" class="block text-white text-lg mb-2">Email:</label>
              <input 
              type="email" 
              id="email" 
              name="email" 
              class="w-full p-2 border rounded-md" 
              placeholder="Enter email"
              value="{{old('email')}}">
                @error('email')
                    <p class="text-abductedblack-500 text-ms mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-white text-lg mb-2">Password:</label>
              <input 
              type="password" 
              id="password" 
              name="password" 
              class="w-full p-2 border rounded-md" 
              placeholder="Enter password"
              value="{{old('password')}}">
                @error('password')
                    <p class="text-abductedblack-500 text-ms mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-white text-lg mb-2">Confirm Password:</label>
              <input 
              type="password" 
              id="password_confirmation" 
              name="password_confirmation" 
              class="w-full p-2 border rounded-md" 
              placeholder="Enter password">
                @error('password_confirmation')
                    <p class="text-abductedblack-500 text-ms mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="text-white">
                <p>
                    Already have an account?
                    <a href="/login" class="text-abductedblack">Login here</a>
                </p>
            </div>
            <button type="submit" class="self-center mt-4 w-1/2 text-white 
                                        px-4 py-2 rounded-md bg-abductedblack
                                        hover:bg-abducteddarkpink active:bg-abducteddarkerpink">Submit</button>
            <img src="{{ asset('local_images/syncotech_logo_white.png')}}" alt="" class="mt-4 self-center w-16 h-16 mr-4">
          </form>
        </div>
      </div>
</body>