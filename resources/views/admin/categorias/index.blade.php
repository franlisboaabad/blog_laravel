@extends('layouts.layout')

@section('contenido')

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Lista de categorias</h3>
                <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm" style="float: right">Nueva categoria</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th style="width: 40px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td class="text-justify">{{ $category->description }}</td>
                                <td>
                                    <a href="{{ route('categories.edit', $category) }}" class="btn btn-success btn-sm">Editar</a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $categories->links() }}
            </div>
            <!-- /.box-body -->
          
        </div>
    </div>
</div>

@endsection
