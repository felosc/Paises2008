

      <div class="">
        <canvas id="chartBarEurope"></canvas>
      </div>



<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart bar -->
<script>
  let paisesNombreEurope 
  let paisesPoblacionEurope 

  $(document).ready(function(){
    $.ajax({
      type: "GET",
      url: "lel/Europe",
      success: function (response) {
        paisesNombreEurope = response.paisesnombre
        paisesPoblacionEurope = response.paisespoblacion
        PruebaGraficaEurope(paisesNombreEurope,paisesPoblacionEurope)
        console.log(response);
      }
    });
  })


  function PruebaGraficaEurope(nombreP,poblacionP) {

      const dataBarChart = {
    labels: nombreP,
    datasets: [
      {
        label: "Poblacion De Los Paises Europe",
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
    document.getElementById("chartBarEurope"),
    configBarChart
  );

}
</script>  
        
