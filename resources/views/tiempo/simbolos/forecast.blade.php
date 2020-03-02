@switch($hoursDaysForecast[$i]["forecast_condition_name"])
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
        <i class="fas fa-sun"></i>
        @break
    @case("Thunderstorm")
    <i class="fas fa-cloud-showers-heavy"></i>
        @break
@endswitch