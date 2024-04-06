@extends('layouts.app')

@section('titulo')
    Tu cuenta
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('img/usuario.svg') }}" alt="Imagen del usuario">
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ $user->username }}</p>
            </div>

            @if(auth()->user()->username == 'admin')
                <p class="text-2xl text-red-500">

                    {{ "erivoy mi admin" }}
                </p>
            @endif
        </div>
    </div>
@endsection