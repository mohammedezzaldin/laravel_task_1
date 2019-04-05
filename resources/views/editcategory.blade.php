@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Category : {{$category->name}}
            </div>
            <div class="panel-body">
                <form action="{{route('categories.update',['id' => $category->id])}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">name of category</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">save category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection