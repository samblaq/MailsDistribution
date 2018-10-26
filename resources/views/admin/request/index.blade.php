<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manager | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        {{--  <link href="assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />  --}}
        <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    </head>
    <body class="skin-black">
        <header class="header">
                <div class="logo">
                    Mails & Distribution
                </div>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        @include('includes.user-account')
                    </ul>
                </div>
            </nav>
        </header> 
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <br>
                    <br>
                    
                    @include('includes.sidebar')
                </section>
            </aside>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner"> 
                                    <h3>
                                        {{ $countApk }}
                                    </h3>
                                    <p>
                                       <h4>APK Requests</h4>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-plus"></i>
                                </div>
                                <a href="{{ route('apk.index') }}" class="small-box-footer">
                                    View Requests <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        {{ $countDhl }}
                                    </h3>
                                    <p>
                                        <h4>DHL Requests</h4>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-loop"></i>
                                </div>
                                <a href="{{ route('dhl.index') }}" class="small-box-footer">
                                    View Requests <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        {{ $countGhanaPost }}
                                    </h3>
                                    <p>
                                        <h4>Ghana Post Requests</h4>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-checkmark"></i>
                                </div>
                                <a href="{{ route('GhanaPost.index') }}" class="small-box-footer">
                                    View Requests <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </br></br>
                    <div class="row">
                            <div class="col-xs-8">
                                <div class="box box-info">
                                    <div class="box-header">
                                        <h3 class="box-title"><strong>ADMIN LOGS</strong></h3>
                                    </div>
                                    <div class="body">
                                        <div class="box-body table-responsive no-padding">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>Name</th>
                                                    <th>Staff ID</th>
                                                    <th>Date & Time</th>
                                                    <th>Status</th>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </aside>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <script src="{{ asset('js/libs.js') }}" type="text/javascript"></script>
        {{--  <script src="assets/js/AdminLTE/app.js" type="text/javascript"></script>  --}}
        {{--  <script src="assets/js/AdminLTE/dashboard.js" type="text/javascript"></script>  --}}
        {{--  <script src="assets/js/AdminLTE/demo.js" type="text/javascript"></script>  --}}
    </body>
</html>
