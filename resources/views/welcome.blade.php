
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name = "description" content = "">
        <meta name = "author" content = "">
        <link rel = "icon" href = "../../favicon.ico">

        <title>Blog Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href = "https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/yeti/bootstrap.min.css" rel = "stylesheet"
              integrity = "sha384-HzUaiJdCTIY/RL2vDPRGdEQHHahjzwoJJzGUkYjHVzTwXFQ2QN/nVgX7tzoMW3Ov"
              crossorigin = "anonymous">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src = "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse"
                            data-target = "#bs-example-navbar-collapse-2">
                        <span class = "sr-only">Toggle navigation</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <a class = "navbar-brand" href = "#">Brand</a>
                </div>

                <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-2">
                    <ul class = "nav navbar-nav">
                        <li class = "active"><a href = "#">Link <span class = "sr-only">(current)</span></a></li>
                        <li><a href = "#">Link</a></li>
                        <li class = "dropdown">
                            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" role = "button"
                               aria-expanded = "false">Dropdown <span class = "caret"></span></a>
                            <ul class = "dropdown-menu" role = "menu">
                                <li><a href = "#">Action</a></li>
                                <li><a href = "#">Another action</a></li>
                                <li><a href = "#">Something else here</a></li>
                                <li class = "divider"></li>
                                <li><a href = "#">Separated link</a></li>
                                <li class = "divider"></li>
                                <li><a href = "#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class = "navbar-form navbar-left" role = "search">
                        <div class = "form-group">
                            <input type = "text" class = "form-control" placeholder = "Search">
                        </div>
                        <button type = "submit" class = "btn btn-default">Submit</button>
                    </form>
                    <ul class = "nav navbar-nav navbar-right">
                        <li><a href = "#">Link</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class = "container">

            <div class = "blog-header">
                <h1 class = "blog-title">The Bootstrap Blog</h1>
                <p class = "lead blog-description">The official example template of creating a blog with Bootstrap.</p>
            </div>

            <div class = "row">

                <div class = "col-sm-8 blog-main">

                    <div class = "blog-post">
                        <h2 class = "blog-post-title">Sample blog post</h2>
                        <p class = "blog-post-meta">January 1, 2014 by <a href = "#">Mark</a></p>

                        <p>This blog post shows a few different types of content that's supported and styled with
                           Bootstrap. Basic typography, images, and code are all supported.</p>
                        <hr>
                        <p>Cum sociis natoque penatibus et magnis <a href = "#">dis parturient montes</a>, nascetur
                           ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                           Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.
                        </p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                               ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                           amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <h2>Heading</h2>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                           commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                           porta ac consectetur ac, vestibulum at eros.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        <pre><code>Example code block</code></pre>
                        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis
                           euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                           fermentum massa.</p>
                        <h3>Sub-heading</h3>
                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                           lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                           dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                           sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                           augue.</p>
                        <ol>
                            <li>Vestibulum id ligula porta felis euismod semper.</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            </li>
                            <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                        </ol>
                        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at
                           lobortis.</p>
                    </div><!-- /.blog-post -->

                    <div class = "blog-post">
                        <h2 class = "blog-post-title">Another blog post</h2>
                        <p class = "blog-post-meta">December 23, 2013 by <a href = "#">Jacob</a></p>

                        <p>Cum sociis natoque penatibus et magnis <a href = "#">dis parturient montes</a>, nascetur
                           ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                           Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.
                        </p>
                        <blockquote>
                            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                               ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        </blockquote>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                           amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                           commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                           porta ac consectetur ac, vestibulum at eros.</p>
                    </div><!-- /.blog-post -->

                    <div class = "blog-post">
                        <h2 class = "blog-post-title">New feature</h2>
                        <p class = "blog-post-meta">December 14, 2013 by <a href = "#">Chris</a></p>

                        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                           lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                           dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                           sit amet risus.</p>
                        <ul>
                            <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                            <li>Donec id elit non mi porta gravida at eget metus.</li>
                            <li>Nulla vitae elit libero, a pharetra augue.</li>
                        </ul>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                           amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                           augue.</p>
                    </div><!-- /.blog-post -->

                    <nav>
                        <ul class = "pager">
                            <li><a href = "#">Previous</a></li>
                            <li><a href = "#">Next</a></li>
                        </ul>
                    </nav>

                </div><!-- /.blog-main -->

                <div class = "col-sm-3 col-sm-offset-1 blog-sidebar">
                    <div class = "sidebar-module sidebar-module-inset">
                        <h4>About</h4>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
                           amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                    <div class = "sidebar-module">
                        <h4>Archives</h4>
                        <ol class = "list-unstyled">
                            <li><a href = "#">March 2014</a></li>
                            <li><a href = "#">February 2014</a></li>
                            <li><a href = "#">January 2014</a></li>
                            <li><a href = "#">December 2013</a></li>
                            <li><a href = "#">November 2013</a></li>
                            <li><a href = "#">October 2013</a></li>
                            <li><a href = "#">September 2013</a></li>
                            <li><a href = "#">August 2013</a></li>
                            <li><a href = "#">July 2013</a></li>
                            <li><a href = "#">June 2013</a></li>
                            <li><a href = "#">May 2013</a></li>
                            <li><a href = "#">April 2013</a></li>
                        </ol>
                    </div>
                    <div class = "sidebar-module">
                        <h4>Elsewhere</h4>
                        <ol class = "list-unstyled">
                            <li><a href = "#">GitHub</a></li>
                            <li><a href = "#">Twitter</a></li>
                            <li><a href = "#">Facebook</a></li>
                        </ol>
                    </div>
                </div><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </div><!-- /.container -->

        <footer class = "blog-footer">
            <p>Blog template built for <a href = "http://getbootstrap.com">Bootstrap</a> by <a
                        href = "https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href = "#">Back to top</a>
            </p>
        </footer>


              <!-- Bootstrap core JavaScript
              ================================================== -->
              <!-- Placed at the end of the document so the pages load faster -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src = "../../dist/js/bootstrap.min.js"></script>
              <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src = "../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
