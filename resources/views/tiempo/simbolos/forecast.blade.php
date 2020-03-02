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
        @if($hoursDaysForecast[$i]["forecast_updated_time"] == "09:00 PM" || $hoursDaysForecast[$i]["forecast_updated_time"] == "12:00 AM" || $hoursDaysForecast[$i]["forecast_updated_time"] == "03:00 AM")
            <i class="fas fa-moon"></i>
        @else
            <i class="fas fa-sun"></i>
        @endif
        @break
    @case("Thunderstorm")
    <i class="fas fa-cloud-showers-heavy"></i>
        @break
@endswitch