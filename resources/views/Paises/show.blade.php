
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{  $verpais->PaisNombre }}
            </h2>
        </x-slot>
    
    <div class="flex items-center justify-center h-screen text-center">
        
           
        <a href="#" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 >Noteworthy technology acquisitions 2021</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <div class="grid grid-cols-4 gap-4">
        
        <div class="bg-yellow-500 col-span-2"> 
            <label for="" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NOMBRE DEL PAIS</label>                   
            <h5 >{{$verpais->PaisNombre}}</h5>
        </div>
        <div class="bg-lime-600 col-span-2">
            <label for="">CODIGO DEL PAIS</label>
            <p>{{$verpais->PaisCodigo}}</p>                
        </div>
        <div class="bg-violet-400">
            <label for="">CAPITAL DEL PAIS</label>
            @if ($verpais->PaisCapital==null)
            <p>Sin Capital</p>
            @else
            <p>{{ $verpais->ciudad[0]->CiudadNombre }}</p>
            
            @endif                
            
            </div> 
            <div class="bg-violet-400">
                <label for="">ID DEL PAIS</label>                
                <p>{{$verpais->id}}</p>
            </div>
            <div class="bg-violet-400">
                <label for="">CONTINENTE AL QUE PERTENCE EL PAIS</label>                
                <p>{{$verpais->PaisContinente}}</p>
            </div>
            <div class="bg-violet-400">
                <label for="">REGION A LA QUE PERTENECE PAIS</label>                
                <p>{{$verpais->PaisRegion}}</p>
            </div>
            <div class="bg-violet-400">
                <label for="">AREA DEL PAIS</label>                
                <p>{{$verpais->PaisArea}}</p>
            </div> 
            <div class="bg-violet-400">
                <label for="">INDEPENDENCIA  DEL PAIS</label>                
                <p>{{$verpais->PaisIndependencia}}</p>
            </div>
            <div class="bg-violet-400">
                <label for="">POBLACION DEL PAIS</label>                
                <p>{{$verpais->PaisPoblacion}}</p>
            </div>
            <div class="bg-violet-400">
                <label for="">ESPECTATIVA DE VIDA DEL PAIS</label>                
                <p>{{$verpais->PaisExpectativaDeVida}}</p>
            </div>
            <div class="bg-violet-400">
                <label for="">GOBIERNO DEL PAIS</label>                
                <p>{{$verpais->PaisGobierno}}</p>
            </div>         
        </div>
    </a>
        
        <div>
            <button>
                <a href="{{route('verpaises')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">home</a>
            </button>
        </div>
        
        
    </div>        
    


   </x-app-layout>

        
        
        
        
        