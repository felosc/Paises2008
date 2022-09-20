


      <div class="">
        <canvas id="chartBarAsia"></canvas>
      </div>
  


<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>

  let paisesNombreAsia 
  let paisesPoblacionAsia 

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/Asia",
      success: function (response) {
        paisesNombreAsia = response.paisesnombre
        paisesPoblacionAsia = response.paisespoblacion
        PruebaGraficaAsia(paisesNombreAsia,paisesPoblacionAsia)
        console.log(response);
      }
    });
  })


  function PruebaGraficaAsia(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises Asia",
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
    document.getElementById("chartBarAsia"),
    configBarChart
  );

}
</script>  
        
