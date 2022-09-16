
  <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                GRAFICAS DE LOS PAISES
            </h2>
        </x-slot>


        <div class="bg-yellow-500 col-span-2"> 
            <label for="" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">GRAFICA DE PAISES</label>                   
            <h5 >BIENVENIDO</h5>
        </div>

      <div class="">
        <canvas id="chartBar"></canvas>
      </div>
    </x-app-layout> 


<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  $(document).ready(function(){
    $.ajax({
      type:"POST",
      url:'PaisController.php'
      data:{'North America','graficasNa'},
      success:function(response){
          console.log(reposne);
      } error: function () {
        alertError();
        return false;
    }
    })
  })

  const dataBarChart = {
    labels: <?=$paisesnombre?>,
    datasets: [
      {
        label: "Poblacion De Los Paises North America",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data:<?=$paisespoblacion?>
      },
    ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartBar"),
    configBarChart
  );
</script>  
        
