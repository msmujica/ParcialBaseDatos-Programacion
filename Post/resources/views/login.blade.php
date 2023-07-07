@include("Common/header")

<br><br>
<center>
    <h1 style="margin-top:50px">Login</h1>
</center>
<div class="container" style="margin-top:100px">
<div class="row">

    <form action="/login" method="post">
    @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1"name="email">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
    </div>
    <div class="mb-3">
        <a href="/register">Create user</a>
    </div>
    <div class="mb-3">
        <center>
            <button type="submit" class="btn btn-primary mb-3">Login</button>
        </center>
    </div>
    </div>

    @if(session("failed"))
        <div class="alert alert-danger">
            Credenciales Invalidas
        </div>
    @endif

    @if(session("created"))
        <div class="alert alert-success">
            Usuario Creado
        </div>
    @endif

    @if(session("logout"))
    <div class="alert alert-warning">
        Cerraste Sesion
    </div>
    @endif

    </form>