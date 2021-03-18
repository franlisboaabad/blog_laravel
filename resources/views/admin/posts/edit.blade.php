@extends('layouts.layout')

@section('contenido')
<h3>Editar entrada</h3>

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
            <form role="form" method="post" action="{{ route('posts.update', $post ) }}" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label>Seleccionar categoria</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $post->title  )}}">
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <input type="text" class="form-control" id="description" name="description" required value="{{ old('description',$post->description) }}">
                    </div>

                    <div class="form-group">
                        <label for="">Seleccione imagen</label>
                        <input type="file" id="file" name="file">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-primary">Editar</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-info btn-sm"> Todas las entradas </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
