<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manager | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/libs.css') }}">
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
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>MailsDistribution<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li  style="background-color: #333!important;" class="user-header bg-light-blue">
                                    <img src="img/default-avatar.png" class="img-circle" alt="User Image" />
                                    <p>
                                        MailsDistribution
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <li class="user-body">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="{{ route('dashboard.index') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.create') }}">
                                <i class="fa fa-shopping-cart"></i> <span>Create Request</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Edit Request</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/APK') }}">
                                <i class="fa fa-users"></i> <span>APK</span> 
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/DHL') }}">
                                <i class="fa fa-users"></i> <span>DHL</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('admin/GhanaPost') }}">
                                <i class="fa fa-users"></i> <span>Ghana Post</span> 
                            </a>
                        </li>
                     </ul>
                </section>
            </aside>
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Users
                        <small>Search &amp; Manage all users</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Users</li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                   
                                   <div class="box-tools">
                                        <div class="input-group" style="text-align: right;">
                                            <form action="#" method="POST" >
                                                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                                <div class="input-group-btn">
                                                    <button type="submit" name="submit_table_search" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Transaction #</th>
                                                <th>Staff ID</th>
                                                <th>FullName</th>
                                                <th>Branch</th>
                                                <th>Department</th>
                                                <th>Delivery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
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
    </body>
</html>
