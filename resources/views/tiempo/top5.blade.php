@forelse ($temperaturas as $temperatura)
    <div class="d-flex flex-wrap my-2 border-bottom item-lista">
        <div class="numero-lista">
            <p>{{$loop->index + 1}}</p>
        </div>
        <div>
            <p class="temperatura">{{$temperatura->actual_temp}}º</p>
        </div>
        <div class="d-flex flex-column">
            <div>
                <p class="info-cp">CP: <span>{{$temperatura->cp}}</span></p>
            </div>
            <div>
                <p class="info-ciudad">Ciudad: <span>{{$temperatura->city}}</span></p>
            </div>
        </div>
    </div>
@empty
<div class="d-flex flex-wrap my-2 border-bottom item-lista">
    <div class="numero-lista">
        <p>{{$loop->index + 1}}</p>
    </div>
    <div>
        <p class="temperatura"> No hay temperaturas para mostrar.</p>
    </div>
    <div class="d-flex flex-column">
        <div >
            <p class="info-cp"></p>
        </div>
        <div>
            <p class="info-ciudad"></p>
        </div>
    </div>
</div>
@endforelse