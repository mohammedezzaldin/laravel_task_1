 @extends('layouts.app')

@section('content')
 <div class="col-md-8">
     <div class="panel panel-default">
         <div class="panel-heading">
             EDIT SITE SETTINGS
         </div>
         <div class="panel-body">
             <form action="{{route('settings.update')}}" method="post">
                 {{csrf_field()}}
                 <div class="form-group">
                     <label for="name">site name</label>
                     <input type="text" name="name" value="{{$settings->name}}" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="email">site email address</label>
                     <input type="text" name="email" value="{{$settings->email}}" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="keywords">site keywords</label>
                     <textarea name="keywords" id="keywords" cols="10" rows="3" class="form-control">{{$settings->keywords}}</textarea>
                 </div>

                 <div class="form-group">
                     <label for="description">site description</label>
                     <textarea name="description" id="description" cols="10" rows="5" class="form-control">{{$settings->description}}</textarea>
                 </div>

                 <div class="form-group">
                     <label for="maintenance_state">select a state </label>
                     <select name="maintenance_state" id="maintenance_state" class="form-control">
                         <option value="0">disable maintenance mode</option>
                         <option value="1">enable maintenance mode</option>
                     </select>
                 </div>

                 <div class="form-group">
                     <label for="maintenance_message">maintenance message</label>
                     <textarea name="maintenance_message" id="maintenance_message" cols="10" rows="3" class="form-control">{{$settings->maintenance_message}}</textarea>
                 </div>

                 <div class="form-group">
                     <div class="text-center">
                         <button class="btn btn-success" type="submit">
                             update site setting
                         </button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
@endsection
