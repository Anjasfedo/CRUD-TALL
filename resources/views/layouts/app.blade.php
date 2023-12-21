@extends('layouts.base')

@section('body')
    <x-layouts.navigation />
    <livewire:layouts.side-bar />
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-14">
            <div class="p-4 m-4 bg-white rounded-lg shadow dark:bg-gray-800">
                
                @yield('content')
                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
            <x-layouts.footer />
        </div>
    </div>
@endsection
