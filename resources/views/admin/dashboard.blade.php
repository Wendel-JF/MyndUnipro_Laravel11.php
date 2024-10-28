<x-app-layout>
    <x-admin.menu>
        <x-slot:header>
            Admin Dashboard
    </x-slot:header>  
    </x-admin.menu>>
    <div class="cards-container">
        <a
        href="{{ url('/admin/alunos') }}"
    >
        <x-admin.card>
            <x-slot:header>
                <svg class="card-icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 11.3333L0 9L12 2L24 9V17.5H22V10.1667L20 11.3333V18.0113L19.7774 18.2864C17.9457 20.5499 15.1418 22 12 22C8.85817 22 6.05429 20.5499 4.22263 18.2864L4 18.0113V11.3333ZM6 12.5V17.2917C7.46721 18.954 9.61112 20 12 20C14.3889 20 16.5328 18.954 18 17.2917V12.5L12 16L6 12.5ZM3.96927 9L12 13.6846L20.0307 9L12 4.31541L3.96927 9Z"></path></svg>
            </x-slot:header>
            Alunos
        </x-admin.card>
    </a>
        <x-admin.card>
            <x-slot:header>
              
            </x-slot:header>
            Professor
        </x-admin.card>
        <x-admin.card >
            <x-slot:header>
              
            </x-slot:header>
            Diciplinas
        </x-admin.card>
        </div>
        <footer class="py-16 text-center text-sm text-white">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</footer>
</x-app-layout>

