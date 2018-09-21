<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manager | Dashboard</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
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
                            <a href="{{ route('admin.index') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.create') }}">
                                <i class="fa fa-shopping-cart"></i> <span>Create Request</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Edit Request</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>APK</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>DHL</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Ghana Post</span> 
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>Logs</span> 
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
            {{-- Content page header --}}
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Users
                        <small>Search &amp; Manage all users</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Users</li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><strong>Create Request</strong></h3>
                                </div>
                                <div class="body">
                                    
                                    {{-- {!! Form::open(['route' => 'admin.create' ,'id' => 'register']) !!} --}}
                                        
                                        <form action="#"  id="register">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="form-group">
                                                <label for="staff" class="control-label"> Staff</label>
                                                <input type="text" class="form-control" id="staff" name="staff">
                                            </div>
    
                                            <div class="form-group">
                                                <input type="submit" value="submit" name="Submit" id="sub">
                                            </div>
                                        </form>

                                        {{-- <div class="form-group">
                                            {!! Form::label('branchFrom', 'Branch: ', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::select('branchFrom', ['' => 'Choose Branch'] , null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('from', 'Department/Unit (Sending)', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::select('from', ['' => 'Choose Department/Unit'] , null , ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('sender', 'Name of Staff(Sender)', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::text('sender', null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::label('branchTo', 'Branch: ', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::select('branchTo', ['' => 'Choose Branch'] , null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('to', 'Department/Unit (Recieving)', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::select('to', ['' => 'Choose Department/Unit'] , null , ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('reciever', 'Name of Staff(Reciever)', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::text('reciever', null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!}
                                            
                                            {!! Form::datetime('date', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="box-footer">
                                            <div class="form-group">
                                                {!! Form::submit('Create Request' , ['class' => 'form-control btn btn-primary']) !!}
                                            </div>
                                        </div> --}}
                                    {{-- {!! Form::close() !!} --}}
                                        <div id="postRequestData"></div>
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
        <script src="{{ asset('js/libs.js') }}"></script>
        {{-- <script src="js/jquery.js"></script> --}}

        <script type="text/javascript">
            $.ajaxSetup({
                header: {
                    'X-CSRF-TOKEN' : $ ('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function(){
                $('#register').submit(function(){
                    var staff = $('#staff').val();

                    $.post('register' , {StaffID : staff}, function(data){
                        console.log(data);
                        $('#postRequestData').html(data);
                    });
                });
            });
        </script>
    </body>
</html>
