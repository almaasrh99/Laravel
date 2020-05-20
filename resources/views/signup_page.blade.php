<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{url('assets/library/template/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    
    <!-- Main css -->
    <link rel="stylesheet" href="{{url('assets/library/template/css/style_login.css')}}">
</head>
<body>

<div class="main">

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" action="{{url('/signup/action')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="hidden" name="id"/>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" placeholder="Username" required/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <label for="role"><i class="zmdi zmdi-assignment-account"></i></label>
                            <select name="role_id">
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group form-button">
                            <input type="submit" name="signup" class="form-submit" value="Signup"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{url('assets/library/template/images/signup-image.jpg')}}" alt="sing up image"></figure>
                    <a href="{{url('/login')}}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>

</div>

    <!-- JS -->
    <script src="{{url('assets/library/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{url('assets/library/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>