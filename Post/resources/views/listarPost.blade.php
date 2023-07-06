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
                <a href="{{ route('posts.filtrarPorMes', ['mes' => $elemento->created_at->format('F')]) }}">{{ $elemento -> created_at }}</a>
                    
                </td>
                <td>
            @if ($elemento->id_Autor == Auth::user()->id)

                    <a href="/eliminarPost/{{ $elemento -> id }}">Eliminar</a> 
                    <a href="/modificarPost/{{ $elemento -> id }}">Modificar</a> 
                </td>
            </tr>
            @endif
        @endforeach

    </table>
    <div class="mt-8" >
    {{ $post -> links() }}
    </div>
</div>
   
@include("common/footer");