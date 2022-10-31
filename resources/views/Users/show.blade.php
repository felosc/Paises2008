<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $verusuario->name }}
            </h2>
        </x-slot>


        <div class="bg-yellow-500 col-span-2"> 
            <label for="" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NOMBRE DE LA CIUDAD</label>                   
            <h5 >{{$verusuario->name}}</h5>
        </div>
        <div class="bg-lime-600 col-span-2">
            <label for="">NOMBRE DEL USUARIO</label>
            <p>{{$verusuario->name}}</p>                
        </div>

        <div class="bg-violet-400">
            <label for="">CONTRASEÑA DEL USUARIO</label>                
            <p>{{$verusuario->password}}</p>
        </div>
        
            <div class="bg-violet-400">
                <label for="">CORREO DEL USUARIO</label>                
                <p>{{$verusuario->email}}</p>
            </div>
       
            <div>
                <button>
                    <a href="{{route('verciudades')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">home</a>
                </button>
            </div>
            
                            <div>
                        <button>
                            <a href="{{route('editarciudad', $verusuario->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar Ususario</a>
                        </button>
                    </div>
        </div>
        


        </x-app-layout>