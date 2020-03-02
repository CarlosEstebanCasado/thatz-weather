
@php
    $hoursDaysForecast = $forecast["weather_forecast"]
@endphp
@for($i=0; $i < count($hoursDaysForecast); $i++)
<div class="one-slide">
    <div class="d-flex flex-column dia-forecast border-left text-center">
    
        <p class="dia-semana">{{$hoursDaysForecast[$i]["forecast_updated_day"]}}</p>

        <p>{{$hoursDaysForecast[$i]["forecast_updated_time"]}}</p>
    
        @include('tiempo.simbolos.forecast')
    
        <p>{{$hoursDaysForecast[$i]["forecast_condition_desc"]}}</p>
    
        <p class="temperatura">{{$hoursDaysForecast[$i]["forecast_condition_temp"]}}º</p>
    
    </div>
</div>
@endfor