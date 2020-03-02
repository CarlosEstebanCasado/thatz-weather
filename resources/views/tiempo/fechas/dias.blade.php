@switch($hoursDaysForecast[$i]["forecast_updated_day"])
    @case("Monday")
        <p class="dia-semana">Lunes</p>
        @break
    @case("Tuesday")
        <p class="dia-semana">Martes</p>
        @break
    @case("Wednesday")
        <p class="dia-semana">Miercoles</p>
        @break
    @case("Thursday")
        <p class="dia-semana">Jueves</p>
        @break
    @case("Friday")
        <p class="dia-semana">Viernes</p>
        @break
    @case("Saturday")
        <p class="dia-semana">Sábado</p>
        @break
    @case("Sunday")
        <p class="dia-semana">Domingo</p>
        @break
@endswitch