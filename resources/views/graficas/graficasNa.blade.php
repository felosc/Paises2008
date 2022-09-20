
      <div class="">
        <canvas id="chartBarNorthAmerica"></canvas>
      </div>

      

  
 


<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  
  let paisesNombreNA 
  let paisesPoblacionNA 

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/North America",
      success: function (response) {
        paisesNombreNA = response.paisesnombre
        paisesPoblacionNA = response.paisespoblacion
        PruebaGraficaNA(paisesNombreNA,paisesPoblacionNA)
        console.log(response);
      }
    });
  })


  function PruebaGraficaNA(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises North America",
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
    document.getElementById("chartBarNorthAmerica"),
    configBarChart
  );

}



  
</script>  
        
