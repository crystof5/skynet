<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="test">
    <meta name="author" content="">

    <title>test</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('blog-theme/css/bootstrap.min.css')}} " rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('blog-theme/css/blog-post.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="{{asset('styles/default.css')}}">
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/highlight.pack.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>
<script>hljs.initHighlightingOnLoad();</script>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WikiCode</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">À propos</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container" style="margin: 10px;">

    <div class="row content">


        <!-- Blog Sidebar Widgets Column -->
        <div class="col-sm-3 sidenav">

            <!-- Blog Search Categories -->
            <div class="well">
                <h4>Recherche par Catégorie</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>
            <!-- Blog Search Article -->
            <div class="well">
                <h4>Recherche par article</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Catégories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div>
                    <div class="col-lg-6">
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Category Name</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Articles de la catégorie= ....</h4>

            </div>

        </div>

        <!-- Blog Post Content Column -->
        <div class="col-sm-9">


            @yield('content')

        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; JF. Roy & C. Lamarque. Tout droit révervé.  2017</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src=" {{asset('blog-theme/js/jquery.js')}} "></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('blog-theme/js/bootstrap.min.js')}} "></script>


</body>

</html>
