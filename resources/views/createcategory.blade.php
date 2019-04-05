@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create a new Category
            </div>
            <div class="panel-body">
                <form action="{{route('categories.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="name">name of category</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                       <div class="text-center">
                           <button type="submit" class="btn btn-success">store category</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection