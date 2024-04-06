@extends('layouts.app')

@section('titulo')
    Crear cuenta
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-4 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro">
        </div>

        <div class="md:w-4/12 bg-white p-5 shadow-xl rounded-lg">
            <form action="{{ route("register")}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                        id="name" 
                        name="name"
                        type="text" 
                        class="border p-3 w-full rounded-xl 
                        @error('name')
                            border-red-500    
                        @enderror" 
                        value="{{ old('name') }}"
                        placeholder="Tu nombre"
                    > 
                    
                        @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-md text-center text-sm p-2">
                                {{$message}}
                            </p>
                        @enderror
                </div>


                <div class="mb-5">
                    <label for="user" class="mb-2 block uppercase text-gray-500 font-bold">
                        Usuario
                    </label>
                    <input 
                        id="username" 
                        name="username"
                        type="text" 
                        class="border p-3 w-full rounded-xl 
                        @error('username')
                            border-red-500    
                        @enderror" 
                        placeholder="Tu usuario"
                        value="{{ old('username') }}"
                    > 

                        
                        @error('username')
                            <p class="bg-red-500 text-white my-2 rounded-md text-center text-sm p-2">
                                {{$message}}
                            </p>
                        @enderror

                        
                </div>


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
                        placeholder="Tu usuario"
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
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Password
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation" 
                        type="password" 
                        class="border p-3 w-full rounded-xl
                        @error('password')
                            border-red-500    
                        @enderror"
                        placeholder="Repite tu password"> 
                </div>

                <input type="submit"
                class="bg-sky-600 hover:bg-sky-800 transition-colors cursor-pointer uppercase w-full p-2 rounded-lg text-white font-bold"
                value="Crear cuenta">
            </form>
        </div>
    </div>
@endsection