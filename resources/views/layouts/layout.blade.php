<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	@yield('title')
	<title>Dashboard Home</title>

	<!-- lending Pages CSS -->
    <link href="{{ asset('/lending-pages/css/new-age.css') }} " rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/lending-pages/css/new-age.min.css') }} " rel="stylesheet" type="text/css"/>

    <!-- lending Bootstrap -->

    <link href="{{ asset('/lending-pages/lib/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css"/>

    <link href="{{ asset('/lending-pages/lib/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet" type="text/css"/>



</head>
<body>
@yield('extra-script')

<body id="page-top">
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('register')}}" class="page-scroll"/>Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{('login')}}">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <footer>
        <div class="container">
            <p>&copy; 2016 Start Bootstrap. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacy</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>
</html>