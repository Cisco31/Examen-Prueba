<div>
    <div class="mt-5">
        <div class="float-right mb-2">
            <a href="{{route("libros.create")}}" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> Agregar Libro</a>
        </div>

        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha de Lanzamiento</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <th scope="row">{{$libro->id}}</th>
                        <td>{{$libro->titulo}}</td>
                        <td>{{$libro->editorial}}</td>
                        <td>{{$libro->autor}}</td>
                        <td>{{$libro->fecha_lanzamiento}}</td>
                        <td>
                            <a href="{{ route('libros.edit', $libro) }}" title="Editar libro" type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{$libros->links()}}

    </div>

</div>
