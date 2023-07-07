@include("common/header")
 
<br><br>
<h2>Posts</h2>
<div class="container-fluid">
    <div class="row">
    @auth
            @foreach($post as $elemento)
        <div class="col" style="margin-top: 30px">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $elemento -> Titulo }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $elemento -> Autor }}</h6>
                    <p class="card-text">{{ $elemento -> Cuerpo }}</p>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
{{ $elemento -> created_at }}
                    </h6>
                    <a href="/eliminarPost/{{ $elemento -> id }}">Eliminar</a> 
                    <a href="/modificarPost/{{ $elemento -> id }}">Modificar</a> 
                </div>
            </div>
        </div>
            @endforeach
            @endauth
    </div>
</div>


   
@include("common/footer");