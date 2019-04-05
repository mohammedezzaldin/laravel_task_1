@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create News
            </div>
            <div class="panel-body">
                <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="title">title of News</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="photo">Upload main photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="category_id">Select a Category</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">news content</label>
                        <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                    </div>

                        <form action="/"
                              class="dropzone"
                              id="my-awesome-dropzone">
                        </form>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">store news</button>
                        </div>
                    </div>
                </form>
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