

    <div>
        <div>
        </div>
            <button wire:click="sum">sumar</button>{{$dato}}
        <div>
        <canvas data-te-chart="bar" data-te-dataset-label="Traffic"
            data-te-labels="['Monday', 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday ']"
            data-te-dataset-data="[{{$dato}}, 2343, 2545, 3423, 2365, 1985, 987]">
        </canvas>
        </div>
    </div>
