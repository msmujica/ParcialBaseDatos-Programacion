@include("Componer/header")
          
        <h1>Holi</h1>

        @if(session("created"))
        <div class="alert alert-success">
            User created
        </div>
    @endif

    @if(session("logout"))
    <div class="alert alert-warning">
        User logged out
    </div>
    @endif