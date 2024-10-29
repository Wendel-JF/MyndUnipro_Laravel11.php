<x-app-layout>
    <x-admin.menu>
        <x-slot:header>
            Professor Dashboard
    </x-slot:header>  
                    <h1 class="dark:text-white">Professor</h1>
                    {{ __("You're logged in!") }}
                   
               
    <footer class="py-16 text-center text-sm dark:text-white">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>

</x-app-layout>


 {{-- <div>
    <h1>Professor</h1>
 </div> --}}