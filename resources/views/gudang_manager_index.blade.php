<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/library/bootstrap-4.4.1/css/bootstrap.css')}}">
<!--===============================================================================================-->
    <title>{{$title}}</title>
</head>
<body>

<!-- CONTENT -->
<div>
    <h3>Id       = {{$session['id']}}</h3>
    <h3>Username = {{$session['username']}}</h3>
    <h3>Role     = {{$session['role']}}</h3>
</div>
<div>
    <a href="{{url('/signout')}}" class="btn btn-danger">Sign Out</a>
</div>

<!-- FOOTER -->

<!--===============================================================================================-->
    <script src="{{url('assets/library/jquery-3.4.1/jquery-3.4.1.js')}}"></script>
    <script src="{{url('assets/library/bootstrap-4.4.1/js/bootstrap.js')}}"></script>
<!--===============================================================================================-->

</body>
</html>