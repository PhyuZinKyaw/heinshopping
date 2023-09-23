@extends('layouts.admin')
@section('content')
    <main>
            <div class="container-fluid px-4">
                        <h1 class="my-4">Categories</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Categories List
                            </div>
                            <div class="card-body">
                                <table id="" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Categories Name</th>
                                            <th>Photo</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Categories Name</th>
                                            <th>Photo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td><img src="{{$category->photo}}" class="w-25 h-25"></td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$categories->links()}}
                            </div>
                        </div>
            </div>        
    </main>
@endsection