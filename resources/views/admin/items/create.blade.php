@extends('layouts.admin')
@section('content')

<div class="container-fluid">
<h1 class="text-center mt-5">Items Iput</h1>
    <form action="{{route('backend.items.store')}}" class="m-3" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="codeno" class="form-label">Code No</label>
            <input type="text" class="form-control {{$errors->has('codeno')?'is-invalid' : ''}}" id="codeno" name="codeno">
            @if($errors->has('codeno'))
                <div class="invalid-feedback">
                    {{$errors->first('codeno')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control {{$errors->has('name')?'is-invalid' : ''}}" id="name" name="name">
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input class="form-control {{$errors->has('image')?'is-invalid' : ''}}" type="file" id="image" name="image">
            @if($errors->has('image'))
                <div class="invalid-feedback">
                    {{$errors->first('image')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control {{$errors->has('price')?'is-invalid' : ''}}" id="price" name="price">
            @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{$errors->first('price')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="text" class="form-control {{$errors->has('discount')?'is-invalid' : ''}}" id="discount" name="discount">
            @if($errors->has('discount'))
                <div class="invalid-feedback">
                    {{$errors->first('discount')}}
                </div>
            @endif
        <div class="mb-3">
            <label for="inStock" class="form-label">InStock</label>
            <select class="form-select mb-3 {{$errors->has('inStock')?'is-invalid' : ''}}" aria-label="Default select example" name="inStock">
                <option value="1" selected>Yes</option>
                <option value="0">No</option>
            </select>
            @if($errors->has('inStock'))
                <div class="invalid-feedback">
                    {{$errors->first('inStock')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select mb-3 {{$errors->has('category_id')?'is-invalid' : ''}}" aria-label="Default select example" name="category_id">
                <option value=""> Choose Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @if($errors->has('category_id'))
                <div class="invalid-feedback">
                    {{$errors->first('category_id')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control {{$errors->has('description')?'is-invalid' : ''}}" id="description" rows="3" name="description"></textarea>
            @if($errors->has('description'))
                <div class="invalid-feedback">
                    {{$errors->first('description')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">
                Save
            </button>
        </div>
    </form>
</div>  
@endsection