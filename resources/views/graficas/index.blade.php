  <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                GRAFICAS DE LOS PAISES
            </h2>
        </x-slot>


        <div class="bg-yellow-500 col-span-2"> 
            <label for="" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Poblacion De Los Paises Por  Continente</label>
        </div>

        <section class="flex-col">
          <div class="p-4 m-2">
            @include('graficas.graficasNa')
          </div>
          
        <div class="p-4 m-2">
          @include('graficas.graficasSA')
        </div>

        <div class="p-4 m-2">
          @include('graficas.graficasAfrica')
        </div>
        
        <div class="p-4 m-2">
          @include('graficas.graficasAntartica')
        </div>

        <div class="p-4 m-2">
          @include('graficas.graficasAsia')
        </div>
        
        <div class="p-4 m-2">
          @include('graficas.graficasEuropa')
        </div>
        
        <div class="p-4 m-2">
          @include('graficas.graficasOceania')
        </div>
      </section>


      
    </x-app-layout> 