<x-guest-layout> 
    <div class="flex items-center justify-center h-screen text-center ">
    @foreach ($verpais as $pais )
            
            <div class="bg-yellow-500"> 
                <label for="">NOMBRE DEL PAIS</label>                   
                <h5>{{$pais->PaisNombre}}</h5>
            </div>
            <div class="bg-lime-600">
                <label for="">CODIGO DEL PAIS</label>
                <p>{{$pais->PaisCodigo}}</p>                
            </div>
            <div class="bg-lime-500">
                <label for="">ID DEL PAIS</label>                
                <p>{{$pais->id}}</p>
            <div>  
                @endforeach
            </div>        
            





</x-guest-layout>





