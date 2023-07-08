    @include("Common/header")

    <center>
<h2 style="margin-top: 50px">Modificar Post</h2>
</center>
<div class="container" style="margin-top: 50px">
    <div class="row">

        <form action="/modificarPost" method="post">
            @csrf
            <input type="hidden" name="id" id="" value={{ $post -> id }}> <br>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"  name="Titulo" value=' {{ $post -> Titulo }} '>
            @error('Titulo')
            <div class="alert alert-warning">
                {{ $message }}
            </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Cuerpo</label>
                <input type="text-area" class="form-control" id="exampleFormControlInput1" name="Cuerpo" value=' {{ $post -> Cuerpo }} '>
                @error('Cuerpo')
                <div class="alert alert-warning">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </div>
        </form>

        </div>

    @include("Common/footer")
</body>
</html>