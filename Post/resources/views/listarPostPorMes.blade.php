@include("common/header")
 
<br><br>
<div class="container-fluid">
    <div class="row">
        <h2>Filtrado por Mes Seleccionado</h2>
            @foreach($post as $elemento)
        <div class="col">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $elemento -> Titulo }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $elemento -> Autor }}</h6>
                    <p class="card-text">{{ $elemento -> Cuerpo }}</p>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $elemento -> created_at }}</h6>
                    @if ($elemento->id_Autor == Auth::user()->id)
                    <a href="/eliminarPost/{{ $elemento -> id }}">Eliminar</a> 
                    <a href="/modificarPost/{{ $elemento -> id }}">Modificar</a> 
                    @endif
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>
    
    <center>
        <div class="col-sm-2" style="margin-top:30px;">
            {{ $post -> links() }}
        </div>
    </center>
