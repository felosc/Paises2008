<x-guest-layout>    
    <table class="border-collapse border border-slate-500 ... ">
        <thead>
            <tr>
                <th class="border border-slate-600 ... bg-cyan-100">NOMBRE DEL PAIS</th>
                <th class="border border-slate-600 ... bg-red-100">CODIGO DEL PAIS</th>
                <th class="border border-slate-600 ... bg-yellow-100">POBLACION DEL PAIS</th>
                <th class="border border-slate-600 ... bg-indigo-100">REGION DEL PAIS</th>
                <th class="border border-slate-600 ... bg-indigo-100" colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mostrarpaises as $pais )                    
            <tr>
                <td class="bg-cyan-200 border border-slate-700 ... text-center">{{$pais->PaisNombre}}</td>
                <td class="bg-red-200 border border-slate-700 ... text-center">{{$pais->PaisCodigo}}</td>
                <td class="bg-yellow-200 border border-slate-700 ... text-center">{{$pais->PaisPoblacion}}</td>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisRegion}}</td>                
                  <td class="bg-indigo-200 border border-slate-700 ... text-center"><a href="{{route('verpais', $pais->id)}}">ver</a></td>
                        <td class="bg-indigo-200 border border-slate-700 ... text-center">Editar</td>
                        <td class="bg-indigo-200 border border-slate-700 ... text-center">Borrar</td>                
            </tr>
            @endforeach
    </tbody>
  </table>
</x-guest-layout>