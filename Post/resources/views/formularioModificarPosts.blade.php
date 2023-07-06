
    @include("Common/header")
    <form action="/modificarPost" method="post">
        @csrf
        <input type="hidden" name="id" id="" value={{ $post -> id }}> <br>
        Titulo <input type="text" name="Titulo" id="" value={{ $post -> Titulo }}> <br>
        Cuerpo <input type="text" name="Cuerpo" id="" value={{ $post -> Cuerpo }}> <br>
        Correo <input type="text" name="Autor" id="" value={{ $post -> Autor }}> <br>
        <input type="submit" value="Enviar">
    </form>

    @isset($creado)
        <b>Post Modificado</b>
    @endif

</body>
</html>