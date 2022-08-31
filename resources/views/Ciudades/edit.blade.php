

<form action="{{ route('actualizarciudad',$editCiudad) }}" method="POST">
            @csrf
            @method('PUT')
        <div>
            <label for="">Nombre de la ciudad</label>
            <input name="nombreciudad" value="{{ $editCiudad->CiudadNombre }}" type="text">
        </div>        
        <div>
            <label for="">  Codigo del pais </label>
            <input name="codigopais" value="{{ $editCiudad->PaisCodigo }}" type="text">
        </div>
        <div>
           <label for="">Distrito de la ciudad</label>
            <input name="distritociudad" value="{{ $editCiudad->CiudadDistrito  }}" type="text">
        </div>
       <div>
           <label for="">Poblacions de la ciudad</label>
           <input name="poblacionciudad" value="{{ $editCiudad->CiudadPoblacion }}" type="number">
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