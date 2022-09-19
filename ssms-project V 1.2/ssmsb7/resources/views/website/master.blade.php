<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .my-caption{
            background: rgba(0,0,0,0.5);
        }
    </style>
    <title>SSMSB7 @yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">SSMSB7</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li><a href="{{route('courses')}}" class="nav-link">All Course</a></li>
                <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

                @if(Session::get('student_id'))
                    <li class="dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Session::get('student_name')}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('student-dashboard')}}" class="dropdown-item">Dashboard</a></li>
                            <li><a href="{{route('student-logout')}}" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{route('login-registration')}}" class="nav-link">Login/Registration</a></li>
                @endif

            </ul>
        </div>

    </nav>

    @yield('body')

    <footer>
        <section class="py-5 bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card card-body h-100">
                            <h1 class="text-uppercase fw-bold">SSMS B7</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias animi delectus dicta et harum iusto laudantium modi nam necessitatibus nostrum, nulla officia quidem repudiandae rerum soluta unde veritatis voluptatibus.</p>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="card card-body h-100">
                            <h4 >Popular Link</h4>
                            <hr>
                            <ul class="nav navbar-nav">
                                <li><a href="" class="nav-link">About Me</a></li>
                                <li><a href="" class="nav-link">Our Courses</a></li>
                                <li><a href="" class="nav-link">Our Instructor</a></li>
                                <li><a href="" class="nav-link">Contact US</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="card card-body h-100">
                            <h4 >Contact with Us</h4>
                            <hr/>
                            <address>
                                Dhaka Bangladesh <br>
                                Phone: 684564864867,486467486684
                                Email: masud@gmail.com
                            </address>

                            <ul class="nav d-flex ">
                                <li><a class="nav-link" href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="nav-link" href=""><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="nav-link" href=""><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark pt-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="text-center text-white">Copyright@paban, Design and Develop by <b>Paban</b></p>
                    </div>
                </div>
            </div>
        </section>

    </footer>

    <script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('message'))
        <script>
            toastr.success("{{Session::get('message')}}");
        </script>
        {{Session::forget('message')}}
    @endif

</body>
</html>
