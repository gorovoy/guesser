<x-layout>
    <div class="container">
        <x-slot:title>
            Custom Title
        </x-slot:title>

        <h1> Success </h1>


    <div class="col col-12">
        <a href="{{ route('home') }}" class="w-100 btn btn-lg btn-outline-primary">{{ __('home.try_again') }} </a>
    </div>


    </div>
</x-layout>