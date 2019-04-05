@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Show news
            </div>
            <div class="panel-body">
                <h4>Category Name : {{$news->title}}</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div>title of News</div>
                            <div>{{$news->title}}</div>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div>main photo</div>
                        <img src="{{$news->photo}}" style="width: 50%; height: 50%">
                    </div>
                    <div class="col-md-4">
                        <div>Category</div>
                        <div>{{$news->category->name}}</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content">news content</label>
                    <textarea name="content" id="content" cols="10" rows="10" class="form-control">{{$news->content}}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css">
@stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@stop