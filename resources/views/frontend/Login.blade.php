<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/logincss/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/Adminstyle/logincss/scss/css/style.css') }}">


</head>


<body class="bodystyle">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">

            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-1 p-md-5 pb-1">

                        <div class="d-flex">
                            <div class="w-100 mt-1 text-center">
                                <h2 style="color: #fff; font-weight: 600;">Admin Login</h2>
                            </div>

                        </div>
                        <form method="POST" action="{{ url('/admin/submit') }}" class="login-form">
                            @csrf
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-user"></span></div>
                                <input name="username" type="text" class="form-control rounded-left"
                                    placeholder="Username" required>
                            </div>
                            <div></div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-lock"></span></div>
                                <input type="password" name="password" class="form-control rounded-left"
                                    placeholder="Password" required>
                            </div>
                            <div></div>
                            <div class="form-group d-flex align-items-center">

                                <div class="w-100 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary rounded submit">Login</button>
                                </div>
                            </div>
                            <div></div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('frontend/Adminstyle/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/Adminstyle/js/popper.js') }}"></script>
    <script src="{{ url('frontend/Adminstyle/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/Adminstyle/js/main.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script>
        $(window).load(function() {
            $(".preloader").delay(5000).fadeOut("slow");
            $("#overlayer").delay(5000).fadeOut("slow");
        })
    </script>
</body>

</html>
