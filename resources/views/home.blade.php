@extends('layouts.app')

@section('content')
<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
    <a class="text-3xl font-bold leading-none" href="#">
        <x-logo class="h-8"></x-logo>
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a class="text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary" href="#">Home</a></li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Beneficios</a></li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Serviços Prestados</a></li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Serviços de Acessoria</a></li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contato</a></li>
    </ul>
</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-dark_secondary border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <x-logo class="h-8"></x-logo>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold bg-gradient-to-r from-primary to-secondary text-white rounded" href="#">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Beneficios</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Serviços Prestados</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Serviços de Acessoria</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contato</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6"></div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2022</span>
            </p>
        </div>
    </nav>
</div>

<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            burger.forEach(burger_el => {
                burger_el.addEventListener('click', function() {
                    menu.forEach(menu_el => {
                        menu_el.classList.toggle('hidden');
                    });
                });
            });
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            close.forEach(close_el => {
                close_el.addEventListener('click', function() {
                    menu.forEach(menu_el => {
                        menu_el.classList.toggle('hidden');
                    });
                });
            });
        }

        if (backdrop.length) {
            backdrop.forEach(backdrop_el => {
                backdrop_el.addEventListener('click', function() {
                    menu.forEach(menu_el => {
                        menu_el.classList.toggle('hidden');
                    });
                });
            });
        }
    });
</script>
@endsection