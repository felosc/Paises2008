<x-app-layout>
            <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Actualizar datos de  {{  $editUsuario->name }}
            </h2>
        </x-slot>
    <x-auth-card>
                <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


<form action="{{ route('actualizarusuario',$editUsuario) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="mt-4">
            <x-label for="email" :value="__('Nombre  De Usuario')"/>
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="($editUsuario->name)" required autofocus />
        </div>        
        <div class="mt-4">
            <x-label for="email" :value="__('Correo  Del Usuario')"/>
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="($editUsuario->email)" required autofocus />
        </div>
              
        <div class="mt-4 text-center"> 

                <x-button class="ml-3">
                    {{ __('Actualizar') }}
                </x-button>                
        </div>
</form>
</x-auth-card>
 </x-app-layout>
 