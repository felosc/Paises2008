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
        <div >
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
            </div>
            <input datepicker datepicker-format="yyyy" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
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
        
        
        <div>
            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Actualizar datos
                </button>
            </div>
        </div>
    </form>
</div>
</x-guest-layout>    

</body>
<script src="https://unpkg.com/flowbite@1.5.2/dist/datepicker.js"></script>
</html>