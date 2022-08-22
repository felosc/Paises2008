<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
  <x-guest-layout>
      <div class="flex items-center justify-center">     
      <table id="tablapaises" class="border-separate border border-slate-100 ...">
          <thead>
              <tr>
                  <th class="border border-slate-900 ... bg-slate-200">NOMBRE DEL PAIS</th>
                  <th class="border border-slate-900 ... bg-slate-200">CODIGO DEL PAIS</th>
                  <th class="border border-slate-900 ... bg-slate-200">POBLACION DEL PAIS</th>
                  <th class="border border-slate-900 ... bg-slate-200">REGION DEL PAIS</th>
                  <th class="border border-slate-900 ... bg-slate-200" colspan="3">Acciones</th>
              </tr>
            </thead>
            <tbody>    
              @foreach ($mostrarpaises as $pais )                    
              <tr>
                  <td class="bg-cyan-200 border border-slate-700 ... text-center">{{$pais->PaisNombre}}</td>
                  <td class="bg-red-200 border border-slate-700 ... text-center">{{$pais->PaisCodigo}}</td>
                  <td class="bg-yellow-200 border border-slate-700 ... text-center">{{$pais->PaisPoblacion}}</td>
                  <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisRegion}}</td>                
                    <td class="bg-indigo-200 border border-slate-700 ... text-center">                   
                          <a href="{{route('verpais', $pais->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-0.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ver</a>
                  </td>
                          <td class="bg-indigo-200 border border-slate-700 ... text-center">
                            
                            <a href="{{route('editarpais', $pais->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-0.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>
                          </td>
                          <td class="bg-indigo-200 border border-slate-700 ... text-center">Borrar</td>                
              </tr>
              @endforeach
      </tbody>
    </table>
    </div>
      <div class="flex items-center justify-center">
        {{ $mostrarpaises->links() }}
      </div>
      
  </x-guest-layout>

</body>
</html>
