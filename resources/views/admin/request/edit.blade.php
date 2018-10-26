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
                            <a href="#">
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
            {{-- Content page header --}}
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Request
                        <small>Create Request</small>
                    </h1> 
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    </ol>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title"><strong>Create Request</strong></h3>
                                </div>
                                
                                @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="body">
                                    <div class="form-group">
                                        <label for="staff" class="control-label"> Staff ID</label>
                                        <input type="text" class="form-control" id="searchInput" name="searchInput"><br>
                                        <p id="notFoundMsg" class="control-label text-center text-danger"></p>
                                    </div>
                                    
                                    <div id="employeeProfileElement">
                                        <h4 style="text-align:center">Employee Profile: <span id="employeeName" class="text-success"></span></h4>
                                        {!! Form::model($transact , ['method' => 'PATCH' , 'action' => ['AdminController@update' ,$transact->id] ]) !!}

                                            <div class="form-group">
                                                {!! Form::label("staff", "FullName: ", ['class' => 'control-label']) !!}
                                                    
                                                {!! Form::text("FullName", null, ['id' => 'fullname' ,'class' => 'form-control', 'readonly']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label("branch", "Branch: ", ['class' => 'control-label']) !!}
                                                        
                                                {!! Form::text("Branch", null, ['id' => 'branch' ,'class' => 'form-control','readonly']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label("department", "Department: ", ['class' => 'control-label']) !!}
                                                    
                                                {!! Form::text("Department", null, ['id' => 'department' ,'class' => 'form-control' , 'readonly']) !!}
                                            </div>

                                            <h4 style="text-align:center">Reciever Details</h4>
                                            <div class="form-group">
                                                {!! Form::label("recieverFullName", "FullName: ", ['class' => 'control-label']) !!}
                                                    
                                                {!! Form::text("recieverFullName", null, ['id' => 'recieverFullName' ,'class' => 'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label("recieverBranch", "Branch: ", ['class' => 'control-label']) !!}
                                                    
                                                {!! Form::text("recieverBranch", null, ['id' => 'recieverBranch' ,'class' => 'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label("recieverDepartment", "Department: ", ['class' => 'control-label']) !!}
                                                    
                                                {!! Form::text("recieverDepartment", null, ['id' => 'recieverDepartment' ,'class' => 'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('deliveryMode' , 'Delivery: ' , ['class' => 'control-label']) !!}

                                                {!! Form::select('deliveryMode' , ['' => 'Choose Options'] + $delivery ,null , ['class' => 'form-control', 'id' => 'deliveryMode']) !!}
                                            </div>
                                            <div class="form-group">
                                                
                                                {!! Form::submit("submit", ['class' => 'btn btn-primary form-control']) !!}
                                                
                                            </div>
                                        {!! Form::close() !!}
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
        <script src="{{ asset('js/libs.js') }}"></script>
        {{--Demo javascript code--}}
        <script src="{{asset('app/main.js')}}"></script>
        {{-- <script src="js/jquery.js"></script> --}}

        {{-- <script type="text/javascript">
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
        </script> --}}
    </body>
</html>
