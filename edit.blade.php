<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
     <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
  <script src="{{ asset('public/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
     

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <form action="{{URL::to('submit')}}/{{$f->id}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$f->email_address}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" id="exampleInputPassword1"
            value="{{$f->password}}">
        </div>

            <div class="form-group">
            <select class="form-control" name="sel">
                <option value="{{$f->select}}" @if($f->select== 'soon' ) selected='selected' @endif >google</option>
                <option value="{{$f->select}}" @if($f->select== 'soon' ) selected='selected' @endif >samsung</option>
                <option value="{{$f->select}}" @if($f->select== 'soon' ) selected='selected' @endif >">sung</option>
                <option value="{{$f->select}}" @if($f->select== 'soon' ) selected='selected' @endif >sun</option>
                <option value="{{$f->select}}" @if($f->select== 'soon' ) selected='selected' @endif >soon</option>
            </select>
        </div>
        <div>
             <input type="radio" name="radio" value="yes">yes
             <input type="radio" name="radio" value="no">no
             <img src="{{URL::to('storage/app')}}/{{$f->photo}}" width="50" height="50">

         </div> 
         <div>
             <input type="file" name="photo">
         </div> 
            
        
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

  </body>
</html>