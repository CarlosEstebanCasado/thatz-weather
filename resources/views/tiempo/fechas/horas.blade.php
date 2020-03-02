@switch($hoursDaysForecast[$i]["forecast_updated_time"])
    @case("03:00 AM")
        <p>03h</p>
        @break
    @case("06:00 AM")
        <p>06h</p>
        @break
    @case("09:00 AM")
        <p>09h</p>
        @break
    @case("12:00 PM")
        <p>12h</p>
        @break
    @case("03:00 PM")
        <p>15h</p>
        @break
    @case("06:00 PM")
        <p>18h</p>
        @break
    @case("09:00 PM")
        <p>21h</p>
        @break
    @case("12:00 AM")
        <p>00h</p>
        @break
@endswitch