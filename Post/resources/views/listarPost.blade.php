@include("common/header")
 
<br><br>
<h2>Posts</h2>
<div class="container-fluid">
    <div class="row">
            @foreach($post as $elemento)
        <div class="col">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $elemento -> Titulo }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $elemento -> Autor }}</h6>
                    <p class="card-text">{{ $elemento -> Cuerpo }}</p>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                        <a href="{{ route('posts.filtrarPorMes', ['mes' => $elemento->created_at->format('F')]) }}">{{ $elemento -> created_at }}</a>
                    </h6>
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
   
@include("common/footer");