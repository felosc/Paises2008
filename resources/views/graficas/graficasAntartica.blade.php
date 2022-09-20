

      <div class="">
        <canvas id="chartBarArtantica"></canvas>
      </div>



<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  let paisesNombreArtantica 
  let paisesPoblacionArtantica  

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/Antarctica",
      success: function (response) {
        paisesNombreArtantica  = response.paisesnombre
        paisesPoblacionArtantica  = response.paisespoblacion
        PruebaGraficaArtantica (paisesNombreArtantica,paisesPoblacionArtantica)
        console.log(response);
      }
    });
  })


  function PruebaGraficaArtantica(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises Artantica",
        backgroundColor: "hsl(252, 82.9%, 67.8%)",
        borderColor: "hsl(252, 82.9%, 67.8%)",
        data:poblacionP
      },
    ],
  };

  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartBarArtantica"),
    configBarChart
  );

}
</script>  
        
