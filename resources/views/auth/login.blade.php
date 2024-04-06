@extends('layouts.app')

@section('titulo')
    Iniciar sesión
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen registro">
        </div>

        <div class="md:w-4/12 bg-white p-5 shadow-xl rounded-lg">
            <form action="{{ route("login")}}" method="POST">
                @csrf

                @if(session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-md text-center text-sm p-2">
                        {{session('mensaje')}}
                    </p>
                @endif

               
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email" 
                        type="email" 
                        class="border p-3 w-full rounded-xl
                        @error('email')
                            border-red-500    
                        @enderror"
                        placeholder="Tu correo"
                        value="{{ old('email') }}"
                        >
                        
                        @error('email')
                            <p class="bg-red-500 text-white my-2 rounded-md text-center text-sm p-2">
                                {{$message}}
                            </p>
                        @enderror

                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password" 
                        type="password" 
                        class="border p-3 w-full rounded-xl
                        @error('password')
                            border-red-500    
                        @enderror"
                        placeholder="Tu password"> 

                        @error('password')
                            <p class="bg-red-500 text-white my-2 rounded-md text-center text-sm p-2">
                                {{$message}}
                            </p>
                        @enderror

                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="checkbox">
                    <label class="text-gray-500 text-base" for="checkbox">
                        Mantener mi sesión abierta
                    </label>
                </div>

                <input type="submit"
                class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer uppercase w-full p-2 rounded-lg text-white font-bold"
                value="Iniciar sesión">
            </form>
        </div>
    </div>
    <script src="js/test.js"></script>
@endsection