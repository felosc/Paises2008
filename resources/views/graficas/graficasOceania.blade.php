


      <div class="">
        <canvas id="chartBarOceania"></canvas>
      </div>


<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  let paisesNombreOceania 
  let paisesPoblacionOceania 

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/Oceania",
      success: function (response) {
        paisesNombreOceania = response.paisesnombre
        paisesPoblacionOceania = response.paisespoblacion
        PruebaGraficaOceania(paisesNombreOceania,paisesPoblacionOceania)
        console.log(response);
      }
    });
  })


  function PruebaGraficaOceania(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises Oceania ",
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
    document.getElementById("chartBarOceania"),
    configBarChart
  );

}
</script>  
        
