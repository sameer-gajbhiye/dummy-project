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
    <div class="box">
  <form action="{{URL::to('save')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email"id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="enter email address">
            @error('email')
            <p style="color: red">{{$message}}</p>
            @enderror
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password"id="exampleInputPassword1" placeholder="enter password">
             @error('password')
            <p style="color: red">{{$message}}</p>
            @enderror
        </div>
        <div>
            <div class="form-group">
            <select class="form-control" name="select">    
            
                <option value="google">select type</option>              
                <option value="google">google</option>
                <option value="samsung">samsung</option>
                <option value="sung">sung</option>
                <option value="sun">sun</option>
                <option value="soon">soon</option>

            </select>

        </div>
           @error('select')
            <p style="color: red">{{$message}}</p>
            @enderror
            
        </div>
         <div>
             <input type="radio" name="radio" value="yes">yes
              @error('radio')
            <p style="color: red">{{$message}}</p>
            @enderror
             <input type="radio" name="radio" value="no">no
              @error('radio')
            <p style="color: red">{{$message}}</p>
            @enderror

         </div>   
         <div>
             <input type="file" name="photo">
              @error('photo')
            <p style="color: red">{{$message}}</p>
            @enderror
         </div>   


        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit



     <!--  $('#form').validate({

    

    submitHandler: function(form) {
        $.ajax({
            url: form.action,
            type: form.method,
            data: $(form).serialize(),
            success: function(response) {
                $('#answers').html(response);
            }            
        });
    }
}); -->






        </button>
        
  </form>
  </div>
  

  </body>
</html>