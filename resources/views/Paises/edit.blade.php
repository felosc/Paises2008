    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $editPais->PaisNombre }}
            </h2>
        </x-slot>

    <form  action="{{ route('actualizarpais',$editPais) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del pais</label>
            <input name="nombdrepais" value="{{$editPais->PaisNombre }}" type="text">
        </div>        
        <div>
            <label for="">  Codigo del pais </label>
            <input name="codigopais" value="{{$editPais->PaisCodigo }}" type="text">
        </div>
        <div>
           <label for="">Capital del pais</label>
           <Select name="capitalpais">

               <option value="{{$editPais->PaisCapital }}">{{$editPais->PaisCapital }}</option>
               <option value="">2</option>
           </Select>
        </div>
       <div>
           <label for="">Segundo Codigo del pais</label>
           <input name="codigo2pais" value="{{$editPais->PaisCodigo2 }}" type="text">
       </div>
        <div>
            <label for="">Continente en el que esta el pais</label>
            <input name="continentepais" value="{{$editPais->PaisContinente }}" type="text">
        </div>
        <div>
            <label for="">Region del pais</label>
            <input name="regionpais" value="{{$editPais->PaisRegion }}" type="text">
        </div>
        <div>
            <label for="">Area del Pais</label>
            <input name="areapais" value="{{$editPais->PaisArea }}"  type="text">
        </div>
        <div>
            <label for="">Independencia del Pais</label>
            <input name="independenciapais" value="{{$editPais->PaisIndependencia }}" type="text">
        </div>
        <div>
            <label for="">Poblacion Del Pais</label>
            <input name="poblacionpais" value="{{$editPais->PaisPoblacion }}" type="text">
        </div>
        <div>
            <label for="">Expetativa de vida del pais</label>
            <input name="expectativadevidapais" value="{{$editPais->PaisExpectativaDeVida }}" type="text">
        </div>
        <div>
            <label for="">Producto interno bruto del pais</label>
            <input name="productointernobrutopais" value="{{$editPais->PaisProductoInternoBruto }}" type="text">
        </div>
        <div>
            <label for="">Nombre local del pais</label>
            <input name="nombrelocalpais" value="{{$editPais->PaisNombreLocal }}" type="text">
        </div>
        <div>
            <label for="">Gobierno del pais</label>
            <input name="gobiernopais" value="{{$editPais->PaisGobierno }}" type="text">
        </div>
        <div>
            <label for="">Jefe de estado del pais</label>
            <input name="jefedeestadopais" value="{{$editPais->PaisJefeDeEstado }}" type="text">
        </div>

        <div>
            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                     Actualizar datos
                </button>
            </div>
        </div>
    </form>
   
     </x-app-layout>
<