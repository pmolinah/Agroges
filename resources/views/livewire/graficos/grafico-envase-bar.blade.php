<div>
    <div class="ml-5"><button class="hidden" id="miBoton" wire:click="Datos">Envases por Exportadora</button></div>
    <div id="CharBarEnv"></div>

</div>
<script>
var options = {
          series: [{
          name: '',
          data: []
        }, {
          name: '',
          data: []
        }, {
          name: '',
          data: []
        }, {
          name: '',
          data: []
        }, {
          name: '',
          data: []
        }],
          chart: {
          type: 'bar',
          height: 230,
          stacked: true,
          stackType: '100%'
        },
        plotOptions: {
          bar: {
            horizontal: true,
          },
        },
        stroke: {
          width: 1,
          colors: ['#fff']
        },
        title: {
          text: 'Cuenta Corriente de EXportadoras por tipo de Envase'
        },
        xaxis: {
          categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014],
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + ",Env."
            }
          }
        },
        fill: {
          opacity: 1
        
        },
        legend: {
          position: 'top',
          horizontalAlign: 'left',
          offsetX: 40
        }
        };

        var chart = new ApexCharts(document.querySelector("#CharBarEnv"), options);
        chart.render();



    document.addEventListener('livewire:load', function () {
        document.getElementById('miBoton').click();
        Livewire.on('updateChartVar', function (labels, dataSets) {
            // Actualiza el gráfico con los nuevos datos
            options.xaxis.categories = labels;
            options.series = dataSets;

            chart.updateSeries(options.series);
            chart.updateOptions(options);
        });
    });
</script>