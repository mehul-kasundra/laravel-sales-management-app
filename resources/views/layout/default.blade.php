<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cappellos</title>

    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('../../bootstrap/css/bootstrap.min.css')}}">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('../../bootstrap/css/4-col-portfolio.css')}}">
    <!-- STYLE -->
    <link rel="stylesheet" href="{{asset('../../bootstrap/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/sale">Cappellos</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="hide">
                        <a href="/today_sale">Today Sale</a>
                    </li>
                    <li class="hide">
                        <a href="/return_invoice">Return Invoice</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    @yield('content')

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="{{asset('../../plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('../../bootstrap/js/bootstrap.min.js')}}"></script>
    
    @yield('footer_scripts')

</body>

</html>
