
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include("Common/header")
<center>
    <h1 style="margin-top:50px">Registrarse</h1>
</center>
<div class="container" style="margin-top:100px">
    <form action="/register" method="post">
            @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="username">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
            </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" name="password-confirmation">
        </div>

        <div class="mb-3">
            <center>
                <button type="submit" class="btn btn-primary mb-3">Login</button>
            </center>
        </div>
    </form>
</div>
</body>
</html>