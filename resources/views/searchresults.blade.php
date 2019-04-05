@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Search Results
            </div>
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="#categoriesTabe" data-toggle="tab" class="active">Categories</a>
                    </li>
                    <li>
                        <a href="#newsTabe" data-toggle="tab">News</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="categoriesTabe">
                        @if($categories->count()>0)
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
                        @else
                            <h4>no results</h4>
                        @endif
                    </div>
                    <div class="tab-pane" id="newsTabe">
                        @if($news->count()>0)
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
                        @else
                            <h4>no results</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection