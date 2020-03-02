
@php
    $hoursDaysForecast = $forecast["weather_forecast"]
@endphp
@for($i=0; $i < count($hoursDaysForecast); $i++)
<div class="one-slide">
    <div class="d-flex flex-column dia-forecast border-left text-center">
        
        @include('tiempo.fechas.dias')

        @include('tiempo.fechas.horas')
    
        @include('tiempo.simbolos.forecast')

        <p>{{$hoursDaysForecast[$i]["forecast_condition_desc"]}}</p>
    
        <p class="temperatura">{{$hoursDaysForecast[$i]["forecast_condition_temp"]}}º</p>
    
    </div>
</div>
@endfor