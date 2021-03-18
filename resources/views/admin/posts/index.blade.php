@extends('layouts.layout')

@section('contenido')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Lista de entradas</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary" style="float:right;">Nueva entrada</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table-bordered table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Categoria</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>

                    <td>{{ $post->id }} </td>
                    <td> {{ $post->category->title }} </td>
                    <td> {{ $post->title }} </td>
                    <td> {{ substr($post->description,0, 50) }} </td>
                    <td>
                        <a href="{{ route('posts.edit', $post ) }}" class="btn btn-sm btn-success">Editar</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Esta seguro de eliminar el registro?')">Eliminar</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        
        </table>

        {{ $posts->links() }}

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection

