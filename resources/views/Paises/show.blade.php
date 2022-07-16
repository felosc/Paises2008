<x-guest-layout>    
    <div class="flex items-center">
        <div>                              
            @foreach ($verpais as $pais )                       
            <a href="#" class="flex flex-col items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="flex flex-col justify-between p-4 leading-normal">
            <td class="bg-cyan-200 border border-slate-700 ... text-center">{{$pais->PaisNombre}}</td>
            <th class="border border-slate-600 ... bg-red-100">CODIGO DEL PAIS</th>
                <td class="bg-red-200 border border-slate-700 ... text-center">{{$pais->PaisCodigo}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">SEGUNDO CODIGO DEL PAIS</th> 
                <td class="bg-red-200 border border-slate-700 ... text-center">{{$pais->PaisCodigo2}}</td>
                <th class="border border-slate-600 ... bg-yellow-100">POBLACION DEL PAIS</th>
                <td class="bg-yellow-200 border border-slate-700 ... text-center">{{$pais->PaisPoblacion}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">PaisContinente</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisContinente}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">PaisRegion</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisRegion}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">PaisArea</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisArea}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">INDEPENDENCIA DEL PAIS</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisIndependencia}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">POBALCION DEL PAIS</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisPoblacion}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">EXPECTATIVA DE VIDA EN EL PAIS</th>                
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisExpectativaDeVida}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">PRODUCTO INTERNO BRUTO</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisProductoInternoBruto}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">PRODUVTO INTERNO BRUTO ANTIGUO</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisProductoInternoBrutoAntiguo}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">NOMBRE LOCAL</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisNombreLocal}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">GOBIERNO DEL PAIS</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisGobierno}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">JEFE DE ESTADO</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisJefeDeEstado}}</td>
                <th class="border border-slate-600 ... bg-indigo-100">CAPITAL DEL PAIS</th>
                <td class="bg-indigo-200 border border-slate-700 ... text-center">{{$pais->PaisCapital}}</td>               
                    </div>
                </a>

            @endforeach
            </div>            
            

</div>




</x-guest-layout>





