@extends('layouts.app')

@section('main')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <h3 class="text-muted">Product Edit #{{$product->name}}</h3>
                <form method="POST" action="/products/{{$product->id}}/update" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}">
        @if($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" rows="4" class="form-control">{{ old('description' ,$product->description) }}</textarea>
        @if($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        @if($errors->has('image'))
        <span class="text-danger">{{ $errors->first('image')}}</span>
        @endif
    </div>
    <div class="row">
    <div class="col-6 text-start">
            <a href="{{ url('/') }}"><button type="button" class="btn btn-dark mt-2">Cancel</button></a>
        </div>
        <div class="col-6 text-end">
            <button type="submit" class="btn btn-dark mt-2">Update</button>
        </div>
        
    </div>
</form>

            
        </div>
      </div>
    </div>

@endsection