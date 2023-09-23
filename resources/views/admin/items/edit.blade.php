@extends('layouts.admin')
@section('content')

<div class="container-fluid">
<h1 class="text-center mt-5">Items Iput</h1>
    <form action="{{route('backend.items.update',$item->id)}}" class="m-3" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('put')}}
        <div class="mb-3">
            <label for="codeno" class="form-label">Code No</label>
            <input type="text" class="form-control {{$errors->has('codeno')?'is-invalid' : ''}}" id="codeno" name="codeno" value="{{$item->codeno}}">
            @if($errors->has('codeno'))
                <div class="invalid-feedback">
                    {{$errors->first('codeno')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control {{$errors->has('name')?'is-invalid' : ''}}" id="name" name="name" value="{{$item->name}}">
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="old_photo-tab" data-bs-toggle="tab" data-bs-target="#old_photo-tab-pane" type="button" role="tab" aria-controls="old_photo-tab-pane" aria-selected="true">Photo</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="new_photo-tab" data-bs-toggle="tab" data-bs-target="#new_photo-tab-pane" type="button" role="tab" aria-controls="new_photo-tab-pane" aria-selected="false">New Photo</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="old_photo-tab-pane" role="tabpanel" aria-labelledby="old_photo-tab" tabindex="0">
                    <img src="{{$item->image}}" alt="" class="w-25 h-25 py-3">
                    <input type="hidden" name="old_image" value="{{$item->image}}">
                </div>
                <div class="tab-pane fade" id="new_photo-tab-pane" role="tabpanel" aria-labelledby="new_photo-tab" tabindex="0">
                    <input class="form-control my-3 {{$errors->has('image')?'is-invalid' : ''}}" type="file" id="image" name="new_image">
                    @if($errors->has('image'))
                        <div class="invalid-feedback">
                            {{$errors->first('image')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control {{$errors->has('price')?'is-invalid' : ''}}" id="price" name="price" value="{{$item->price}}">
            @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{$errors->first('price')}}
                </div>
            @endif
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Discount</label>
            <input type="text" class="form-control {{$errors->has('discount')?'is-invalid' : ''}}" id="discount" name="discount" value="{{$item->discount}}">
            @if($errors->has('discount'))
                <div class="invalid-feedback">
                    {{$errors->first('discount')}}
                </div>
            @endif
        <div class="mb-3">
            <label for="inStock" class="form-label">InStock</label>
            <select class="form-select mb-3 {{$errors->has('inStock')?'is-invalid' : ''}}" aria-label="Default select example" name="inStock">
                <option value="1" {{$item->inStock == 1 ? 'selected':''}}>Yes</option>
                <option value="0" {{$item->inStock == 0 ? 'selected':''}}>No</option>
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
                <option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
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
            <textarea class="form-control {{$errors->has('description')?'is-invalid' : ''}}" id="description" rows="3" name="description">{{$item->description}}</textarea>
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