@extends('layouts.app')

@section('content')

    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <th>category name</th>
                        <th>Editing</th>
                        <th>Deleting</th>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td><a href="{{route('categories.show',['id' => $category->id])}}">{{$category->name}}</a></td>
                            <td><a href="{{route('categories.edit',['id' => $category->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                            <td><a href="{{route('categories.delete',['id' => $category->id])}}" class="btn btn-xs btn-danger" >Delete</a></td>
                        </tr>
                   @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{route('categories.create')}}" class="btn btn-success">create new category</a>
                </div>
            </div>
        </div>
    </div>

@endsection