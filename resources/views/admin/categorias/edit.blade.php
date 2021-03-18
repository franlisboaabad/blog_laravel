@extends('layouts.layout')

@section('contenido')
<h3>Editar categoria</h3>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="row">
    <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-header with-border">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="{{ route('categories.update', $category) }}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $category->title) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" id="description" name="description"  value="{{ old('description', $category->description) }}">
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a href="{{  route('categories.index') }}" class="btn btn-info btn-sm">Todas las categorias</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
