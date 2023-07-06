@include("common/header")
 
<br><br>
<h2>Posts</h2>
<div class="container">
<div class="row">

    <table>
        <tr>
            <th>
                Titulo
            </th>
            <th>
                Cuerpo
            </th>
            <th>
                Autor
            </th>
        </tr>
        @auth
            @foreach($post as $elemento)
                <tr>
                    <td>
                        {{ $elemento -> Titulo }}
                    </td>
                    <td>
                        {{ $elemento -> Cuerpo }}
                    </td>
                    <td>
                        {{ $elemento -> Autor }}
                    </td>
                    <td>
                        {{ $elemento -> created_at }}
                    </td>
                    <td>
                    <a href="/eliminarPost/{{ $elemento -> id }}">Eliminar</a> 
                    <a href="/modificarPost/{{ $elemento -> id }}">Modificar</a> 

                </td>
                </tr>

            @endforeach
        @endauth
    </table>
        <div>
            
        </div>
</div>

@include("common/footer");