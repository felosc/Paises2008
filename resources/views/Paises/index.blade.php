<x-guest-layout>

    
    <table class="table-auto-center">
        <thead>
            <tr>
                <th class="border border-slate-600 ...">NOMBRE DEL PAIS</th>
                <th class="border border-slate-600 ...">CODIGO DEL PAIS</th>
                <th class="border border-slate-600 ...">POBLACION DEL PAIS</th>
                <th class="border border-slate-600 ...">REGION DEL PAIS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mostrarpaises as $pais )                    
            <tr>
                <td class="border border-slate-700 text-center">{{$pais->PaisNombre}}</td>
                <td class="border border-slate-700 ... text-center">{{$pais->PaisCodigo}}</td>
                <td class="border border-slate-700 ... text-center">{{$pais->PaisPoblacion}}</td>
                <td class="border border-slate-700 ... text-center">{{$pais->PaisRegion}}</td>
            </tr>
            @endforeach
    </tbody>
  </table>
</x-guest-layout>