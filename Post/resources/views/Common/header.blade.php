<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div class="content-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark"> 
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link ">Welcome {{ Auth::user()->name}}.</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/CrearPost">Crear Post</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/ListarPost">Posts</a>
                    </li>
                    <div class="nav-item">
                      <a class="nav-link" href="/listarMisPosts">Mis posts</a>
                    </div>
                    <li class="nav-item">
                         <a class="btn btn-primary" href="/logout">Logout</a>
                    </li>
                    @else 
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/register">Registrarse</a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-primary" href="/">Login</a>
                    </li>
                    @endif
                </ul>     
              </div>
            </div>
          </nav>
