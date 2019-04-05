@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
               Show Category
            </div>
            <div class="panel-body">
                Category Name : {{$category->name}}
            </div>
        </div>
        </div>
    </div>
@endsection