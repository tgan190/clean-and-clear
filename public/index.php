<!DOCTYPE html>
<html>
    <head>
        <title>Home - Clean & Clear</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Main CSS -->
        <link href="css/bootstrap.css" rel="stylesheet"> 

        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">  

        <!-- Include JQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap main javascript -->
        <script src="js/bootstrap.js"></script>

        <script>
            $(document).ready(function() {
                $('#tooltip1').tooltip('hide');
                $('#tooltip2').tooltip('hide');
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="top-bar"></div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="Clean & Clear" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Innovate<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="innovate.html">Learn</a></li>
                            <li><a href="innovate.html">Create</a></li>
                            <li><a href="innovate.html">Teach</a></li>        
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <li class="login"  data-toggle="modal" data-target="#loginModal"><a href="#">Login</a></li>
                    <li class="register"  data-toggle="modal" data-target="#regModal"><a href="#">Register</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="loginModalLabel">Login Form</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" data-dismiss="modal">Sign in</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        
        <!-- Register Modal -->
        <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="regModalLabel">Register</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                            </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
                                </div>
                            </div>
                        

                        </form>
                    </div>
                    <div class="modal-footer">

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-offset-5">
                        <div class="jumbotron-content">
                            <h1>Clean & Clear HTML5 Template</h1>
                            <p class="lead">Clean & Clear is a responsive HTML5 template based on the Twitter Bootstrap framework.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="bluebox">
                        <h3><span class="glyphicon glyphicon-book"></span> Learn...</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#" id="tooltip1" data-toggle="tooltip" title="This is the first tooltip">Phasellus iaculis posuere</a> sem ac tempus. Curabitur aliquet metus ut purus eleifend, in cursus risus aliquam
                        </p>
                        <a class="readmore" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="redbox">
                        <h3><span class="glyphicon glyphicon-eye-open"> </span> Create...</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis posuere sem ac tempus. <a href="#" id="tooltip2" data-toggle="tooltip" title="This is another tooltip">Curabitur aliquet metus</a> ut purus eleifend, in cursus risus aliquam
                        </p>
                        <a class="readmore" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bluebox">
                        <h3><span class="glyphicon glyphicon-road"></span> Teach...</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis posuere sem ac tempus. Curabitur aliquet metus ut purus eleifend, in cursus risus aliquam
                        </p>
                        <a class="readmore" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row pad-top-30">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading panel-blue-heading">
                            <h3 class="panel-title">Whats Happening In The World?</h3>
                        </div>
                        <div class="panel-body">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="images/small1.jpg" alt="Small Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>Curabitur a quam vitae velit dapibus vestibulum. Proin dictum hendrerit imperdiet. Nam eget dolor venenatis, vehicula erat vel, varius odio. Fusce luctus facilisis augue, ut cursus augue dapibus eu. Nulla tincidunt, risus in iaculis faucibus, justo metus eleifend eros</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="images/small2.jpg" alt="Small Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>Curabitur a quam vitae velit dapibus vestibulum. Proin dictum hendrerit imperdiet. Nam eget dolor venenatis, vehicula erat vel, varius odio. Fusce luctus facilisis augue, ut cursus augue dapibus eu. Nulla tincidunt, risus in iaculis faucibus, justo metus eleifend eros</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="images/small3.jpg" alt="Small Image">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                    <p>Curabitur a quam vitae velit dapibus vestibulum. Proin dictum hendrerit imperdiet. Nam eget dolor venenatis, vehicula erat vel, varius odio. Fusce luctus facilisis augue, ut cursus augue dapibus eu. Nulla tincidunt, risus in iaculis faucibus, justo metus eleifend eros</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <div class="col-md-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Home
                        </a>
                        <a href="#" class="list-group-item">About</a>
                        <a href="#" class="list-group-item">Innovate</a>
                        <a href="#" class="list-group-item">Blog</a>
                        <a href="#" class="list-group-item">Contact Us</a>
                    </div>
                    <div class="grey-list list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            Copyright &copy; 2013, Clean & Clear
        </footer>
    </body>
</html>