    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Actualizar datos de  {{  $editUsuario->name }}
            </h2>
        </x-slot>

<form action="{{ route('actualizarusuario',$editUsuario) }}" method="POST">
            @csrf
            @method('PUT')
        <div>
            <label for="">Nombre de Usuario</label>
            <input name="name" value="{{ $editUsuario->name }}" type="text">
        </div>        
        <div>
            <label for="">  Correo de el Usuario </label>
            <input name="email" value="{{ $editUsuario->email }}" type="text">
        </div>
              
        <div>
            <div>
                <button type="submit" 
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                ACTUALIZAR
            </button>
        </div>
    </div>
</form>

</x-app-layout>