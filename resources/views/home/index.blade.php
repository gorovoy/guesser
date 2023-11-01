<x-layout>
    <div class="container">
        <x-slot:title>
            Custom Title
        </x-slot:title>

        <h1> Hello World </h1>

        <code>
        {{ str_replace('_', '-', app()->getLocale()) }} <br/>
        {{ app()->path() }} <br/>
        {{ app()->basePath() }} <br/>
        {{ app()->configPath() }} <br/>
        {{ app()->databasePath() }} <br/>
        {{ app()->version() }} <br/>
        {{ app()->storagePath() }} <br/>
        {{ app()->runningInConsole() }} <br/>
        </code>
    </div>
</x-layout>