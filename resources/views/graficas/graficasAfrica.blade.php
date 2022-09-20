


               
        <div>
          <canvas id="chartBarAfrica"></canvas>
        </div>
        



<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  let paisesNombreAfrica 
  let paisesPoblacionAfrica 

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/Africa",
      success: function (response) {
        paisesNombreAfrica = response.paisesnombre
        paisesPoblacionAfrica = response.paisespoblacion
        PruebaGraficaAfrica(paisesNombreAfrica,paisesPoblacionAfrica)
        console.log(response);
      }
    });
  })


  function PruebaGraficaAfrica(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises Africa",
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
    document.getElementById("chartBarAfrica"),
    configBarChart
  );

}
</script>  
        
