@extends('layouts.app')

@section('content')
<div class="col-md-8 ">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <h3 class="text-center">welcome to admin controle panel</h3><br><br>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">Categories Count</div>
                        <div class="panel-body text-center">{{$categories->count()}}</div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">News Count</div>
                        <div class="panel-body text-center">{{$news->count()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
