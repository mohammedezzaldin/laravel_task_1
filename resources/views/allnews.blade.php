@extends('layouts.app')

@section('content')

    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <th>News Title</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                    </thead>
                    <tbody>
                    @foreach($news as $item)
                        <tr>
                            <td><a href="{{route('news.show',['id' => $item->id])}}">{{$item->title}}</a></td>
                            <td><a href="{{route('news.edit',['id' => $item->id])}}" class="btn btn-xs btn-info">Edit</a></td>
                            <td><a href="{{route('news.delete',['id' => $item->id])}}" class="btn btn-xs btn-danger" >Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{route('news.create')}}" class="btn btn-success">create news</a>
                </div>
            </div>
        </div>
    </div>

@endsection