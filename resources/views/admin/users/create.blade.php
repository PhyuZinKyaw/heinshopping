@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <h1 class="text-center mt-5">Users Iput</h1>
        <form action="{{route('backend.users.store')}}" class="m-3" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
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
                <label for="email" class="form-label">Emial</label>
                <input type="email" class="form-control {{$errors->has('email')?'is-invalid' : ''}}" id="email" name="email">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select mb-3 {{$errors->has('role')?'is-invalid' : ''}}" aria-label="Default select example" name="role">
                    <option value="Super Admin">Super Admin</option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>
                @if($errors->has('role'))
                    <div class="invalid-feedback">
                        {{$errors->first('role')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Passwrod</label>
                <input type="password" class="form-control {{$errors->has('password')?'is-invalid' : ''}}" id="password" name="password">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{$errors->first('password')}}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control {{$errors->has('password_confirmation')?'is-invalid' : ''}}" id="password_confirmation" name="password_confirmation">
                @if($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{$errors->first('password_confirmation')}}
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