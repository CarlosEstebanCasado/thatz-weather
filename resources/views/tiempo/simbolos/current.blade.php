

@switch($current["weather_condition_name"])
    @case("Clouds")
        <i class="fas fa-cloud"></i>
        @break
    @case("Snow")
        <i class="far fa-snowflake"></i>
        @break
    @case("Rain")
        <i class="fas fa-cloud-showers-heavy"></i>
        @break
    @case("Clear")
        <!--Calcula si es de dia o de noche y muestra el símbolo adecuado-->
        @if($current["weather_updated"] > $current["weather_time_sunrise"] && $current["weather_updated"] < $current["weather_time_sunset"])
            <i class="fas fa-sun"></i>
        @else
            <i class="fas fa-moon"></i>
        @endif
        @break
    @case("Thunderstorm")
    <i class="fas fa-cloud-showers-heavy"></i>
        @break
@endswitch