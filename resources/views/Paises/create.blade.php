<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="">
        @csrf
        <div>
            <label for="">Nombre del pais</label>
            <input type="text">
        </div>        
        <div>
            <label for="">  Codigo del pais </label>
            <input type="text">
        </div>
        <div>
           <label for="">Capital del pais</label>
           <Select>
               <option value="">1</option>
               <option value="">2</option>
           </Select>
        </div>
       <div>
           <label for="">Segundo Codigo del pais</label>
       </div>
        <div>
            <label for="">Continente en el que esta el pais</label>
            <input type="ratio">
        </div>
        <div>
            <label for="">Region del pais</label>
            <input type="text">
        </div>
        <div>
            <label for="">Area del Pais</label>
            <input type="number">
        </div>
        <div>
            <label for="">Independencia del Pais</label>
            <input type="date" > 
        </div>
        <div>
            <label for="">Poblacion Del Pais</label>
            <input type="number">
        </div>
        <div>
            <label for="">Expetativa de vida del pais</label>
            <input type="number">
        </div>
        <div>
            <label for="">Producto interno bruto del pais</label>
            <input type="number">
        </div>
        <div>
            <label for="">Nombre local del pais</label>
            <input type="text">
        </div>
        <div>
            <label for="">Gobierno del pais</label>
            <input type="text">
        </div>
        <div>
            <label for="">Jefe de estado del pais</label>
            <input type="text">
        </div>
    </form>
    
</body>
</html>