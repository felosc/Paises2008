

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Ciudades') }}
            </h2>
        </x-slot>

<div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
        <div class="flex items-center justify-center">     
          <table id="tablapaises" class="border-separate border border-slate-100 ...">
            <thead>
              <tr>
                  <th class="border border-slate-900 ... bg-slate-200">NOMBRE DE LA CIUDAD</th>
                  <th class="border border-slate-900 ... bg-slate-200">CODIGO DEL PAIS</th>
                  <th class="border border-slate-900 ... bg-slate-200">DISTRITO DE LA CIUDAD</th>
                  <th class="border border-slate-900 ... bg-slate-200">POBLACION DE LA CIUDAD</th>
                  <th class="border border-slate-900 ... bg-slate-200" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>    
              @foreach ($mostrarciudades as $ciudad )                    
              <tr>
                  <td class="bg-cyan-200 border border-slate-700 ... text-center">{{$ciudad->CiudadNombre}}</td>
                  <td class="bg-red-200 border border-slate-700 ... text-center">{{$ciudad->PaisCodigo}}</td>
                  <td class="bg-yellow-200 border border-slate-700 ... text-center">{{$ciudad->CiudadDistrito}}</td>
                  <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$ciudad->CiudadPoblacion}}</td>                
                    <td class="bg-indigo-200 border border-slate-700 ... text-center">                   
                          <a href="{{route('verciudad', $ciudad->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-0.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ver</a>
                  </td>
                          <td class="bg-indigo-200 border border-slate-700 ... text-center">
                            
                            <a href="{{route('editarciudad', $ciudad->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-0.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                          </td>
                          <td class="bg-indigo-200 border border-slate-700 ... text-center">
                            <form action="{{ route('borrarciudad',$ciudad->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <x-button>Eliminar</x-button>
                              </form>
                          </td>                
              </tr>
              @endforeach
      </tbody>
    </table>
    </div>
          <div class="flex items-center justify-center">
        {{ $mostrarciudades->links() }}
      </div>
                    </div>
                </div>
            </div>
      </div>             

 </x-app-layout>      
    