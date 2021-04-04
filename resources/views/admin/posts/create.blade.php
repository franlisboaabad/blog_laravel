@extends('layouts.layout')

@section('contenido')
<h3>Agregar nueva entrada</h3>

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
            <form role="form" method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label>Seleccionar categoria</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}"> {{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <textarea name="description" id="description" rows="8" required class="form-control"> value="{{ old('description') }}" </textarea>
                        {{-- <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"> --}}
                    </div>

                    <div class="form-group">
                        <label for="">Seleccione imagen</label>
                        <input type="file" id="file" name="file">
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    @csrf
                    @method('post')
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <a href="{{  route('posts.index') }}" class="btn btn-info btn-sm">Todas las entradas</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
