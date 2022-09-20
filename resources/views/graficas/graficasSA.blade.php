

      <div class="">
        <canvas id="chartBarSouthAmerica"></canvas>
      </div>



<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  let paisesNombreSA 
  let paisesPoblacionSA 

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/South America",
      success: function (response) {
        paisesNombreSA = response.paisesnombre
        paisesPoblacionSA = response.paisespoblacion
        PruebaGraficaSA(paisesNombreSA,paisesPoblacionSA)
        console.log(response);
      }
    });
  })


  function PruebaGraficaSA(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises South America",
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
    document.getElementById("chartBarSouthAmerica"),
    configBarChart
  );

}
</script>  
        
