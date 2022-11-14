<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $verusuario->name }}
            </h2>
        </x-slot>

<x-auth-card>
            <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <div class="mt-4 text-center">
            <x-label :value="__('Nombre del Usuario')" /> 
            <p>{{$verusuario->name}}</p>                
        </div>
       
            <div class="mt-4 text-center">
                <x-label :value="__('Correo del Usuario')" />                
                <p>{{$verusuario->email}}</p>
            </div>
       
            <div class="mt-4">               
                <button>
                    <a href="{{route('verusuarios')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">home</a>
                </button>
            </div>
            
            <div class="mt-4">
                <button>
                    <a href="{{route('editarusuario', $verusuario->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar Ususario</a>
                </button>
            </div>
        </div>
        
   </x-auth-card>

        </x-app-layout>