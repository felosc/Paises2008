<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="post" action="{{ route('actualizarpais',$editPais->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del pais</label>
            <input value="{{$editPais->PaisNombre }}" type="text">
        </div>        
        <div>
            <label for="">  Codigo del pais </label>
            <input value="{{$editPais->PaisCodigo }}" type="text">
        </div>
        <div>
           <label for="">Capital del pais</label>
           <Select>

               <option value="">{{$editPais->PaisCapital }}</option>
               <option value="">2</option>
           </Select>
        </div>
       <div>
           <label for="">Segundo Codigo del pais</label>
           <input value="{{$editPais->PaisCodigo2 }}" type="text">
       </div>
        <div>
            <label for="">Continente en el que esta el pais</label>
            <input value="{{$editPais->PaisContinente }}" type="text">
        </div>
        <div>
            <label for="">Region del pais</label>
            <input value="{{$editPais->PaisRegion }}" type="text">
        </div>
        <div>
            <label for="">Area del Pais</label>
            <input value="{{$editPais->PaisArea }}"  type="text">
        </div>
        <div>
            <label for="">Independencia del Pais</label>
            <input value="{{$editPais->PaisIndependencia }}" type="text">
        </div>
        <div>
            <label for="">Poblacion Del Pais</label>
            <input value="{{$editPais->PaisPoblacion }}" type="text">
        </div>
        <div>
            <label for="">Expetativa de vida del pais</label>
            <input value="{{$editPais->PaisExpectativaDeVida }}" type="text">
        </div>
        <div>
            <label for="">Producto interno bruto del pais</label>
            <input value="{{$editPais->PaisProductoInternoBruto }}" type="text">
        </div>
        <div>
            <label for="">Nombre local del pais</label>
            <input value="{{$editPais->PaisNombreLocal }}" type="text">
        </div>
        <div>
            <label for="">Gobierno del pais</label>
            <input value="{{$editPais->PaisGobierno }}" type="text">
        </div>
        <div>
            <label for="">Jefe de estado del pais</label>
            <input value="{{$editPais->PaisJefeDeEstado }}" type="text">
        </div>

        <div>
            <div>
                <button type="submit" class="btn btn-blue">
                     Actualizar datos
                </button>
            </div>
        </div>


    </form>
    
</body>
</html>