@include("Componer/header")

<br><br>



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
        <button type="submit" class="btn btn-primary mb-3">Login</button>
    </div>

    @if(session("failed"))
        <div class="alert alert-danger">
            Invalid credentials
        </div>
    @endif

    </form>