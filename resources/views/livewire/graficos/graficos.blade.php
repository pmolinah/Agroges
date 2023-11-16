<div>
    <div class="ml-5 mr-5 inline-block">Semana
        <select wire:model.defer="semanaEspecie" wire:change="KilosXSemanaCampo">
            <option></option>
            @for ($i = 1; $i < 53; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>
    <div class="border-solid border-2 border-sky-500">
    <canvas class="shadow-xl m-2" id="myChart" width="50" height="200"></canvas>
    </div>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [],
            datasets: [{
                label: 'Grafico de Especies x Semana',
                data: [],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            }
        }
    });

    // Livewire listener
    document.addEventListener('livewire:load', function() {
        Livewire.on('updateChart', function(labels, data) {
            // Limpiar datos antiguos
            myChart.data.labels = [];
            myChart.data.datasets[0].data = [];

            // Llenar con nuevos datos
            myChart.data.labels = labels;
            myChart.data.datasets[0].data = data;

            // Actualizar el gráfico
            myChart.update();
        });
    });
</script>
