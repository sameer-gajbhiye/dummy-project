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
  	<a href="{{URL::to('create')}}">
  		<button type="button" class="btn btn-info">Info</button>
  	</a>
 
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Email address</th>      
      <th scope="col">password</th>      
      <th scope="col">Photo</th>
      <th scope="col">select</th>
      <th scope="col">radio</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
@foreach($demo as $d)
    <tr>
      <th scope="row">{{$d->id}}</th>
      <td>{{$d->email_address}}</td>
      <td>{{$d->password}}</td>
      <td> <img src="{{URL::to('storage/app')}}/{{$d->photo}}" width="50" height="50"> </td>
      <td>{{$d->select}}</td>
      <td>{{$d->radio_sel}}</td>

      <td><a href="{{URL::to('edit')}}/{{$d->id}}"><button type="button" class="btn btn-primary">Edit</button></a><a href="{{URL::to('delete')}}/{{$d->id}}"><button type="button" class="btn btn-warning">Delete</button></a></td>
    </tr>
   @endforeach
  </tbody>
</table>
<!-- <div>
    @foreach($data as $item)
    <li>{{$item->name}}</li>
    @endforeach
  </div>
  <div>{{$data->links()}}</div>
  <style >
    .page-item{
      display: inline-block;
      padding: 10px;
    }
  </style>
  </div> -->

  </body>
 