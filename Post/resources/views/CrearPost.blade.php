@include("Common/header")
 
<br><br>
<h2>Crear Post</h2>
<div class="container">
<div class="row">

    <form action="/CrearPost" method="post">
        @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Titulo">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Cuerpo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="Cuerpo">
            </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary mb-3">Guardar</button>

        </div>
    </form>
</div>

    @if(session("creado"))
        <div class="alert alert-success">
            Created
        </div>
    @endif