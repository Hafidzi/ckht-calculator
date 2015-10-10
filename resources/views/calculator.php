<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>CKHT Calculator</title>


        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">



        <script src="bs-assets/js/ie-emulation-modes-warning.js"></script>


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <style>
/*            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle; 
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 60px;
            }*/

            /* Sticky footer styles
            -------------------------------------------------- */
            html {
              position: relative;
              min-height: 100%;
            }
            body {
              /* Margin bottom by footer height */
              margin-bottom: 60px;
            }
            .footer {
              position: absolute;
              bottom: 0;
              width: 100%;
              /* Set the fixed height of the footer here */
              height: 60px;
              background-color: #f5f5f5;
            }


            /* Custom page CSS
            -------------------------------------------------- */
            /* Not required for template or sticky footer method. */

            body > .container {
              padding: 60px 15px 0;
            }
            .container .text-muted {
              margin: 20px 0;
            }

            .footer > .container {
              padding-right: 15px;
              padding-left: 15px;
            }

            code {
              font-size: 80%;
            }

        </style>
    </head>
    <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Calculator</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="jumbotron">
        <div class="container">
            <!-- <div class="page-header"> -->
                <h1>CKHT Calculator</h1>
           <!--  </div> -->
        </div><!-- container -->
    </div><!-- jumbotron -->

    <div class="container">
            <!-- Forms for Input Data -->
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">Name</span>
                      <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>  
            <!-- END INPUT FORMS -->
    </div>


    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright 2015 @ <a href="http://codecraft.my">Codecraft Studio</a></p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bs-assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>