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
                   @include('includes.sidebar');
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
                                    <h3 class="box-title"><strong>Internal Delivery</strong></h3>
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
                                    {!! Form::model($deliver,['method' => 'PATCH' , 'action' => ['InternalController@update' ,$deliver->id ]]) !!}
                                        <div class="form-group">
                                           {!! Form::label("Branch", "Branch (From):", ['class' => 'control-label']) !!}
                                           
                                           {!! Form::select("Branch" ,['' => 'Choose Options'] + $branch ,null,['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label("receiver", "Name on Package: ", ['class' => 'control-label']) !!}
                                            
                                            {!! Form::text("Name", null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::label("department", "Department", ['class' => 'control-label']) !!}
                                            
                                            {!! Form::text("Department", null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            
                                            {!! Form::label("comment", "Additional Comment (Optional)", ['class' => 'control-label']) !!}
                                            
                                            {!! Form::textarea("Comment", null, ['class' => 'form-control' , 'rows' => 3 , 'cols' => 40]) !!}
                                            
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label("date", "Date: ", ['class' => 'control-label']) !!}
                                            
                                            {!! Form::date("Date", null, ['class' => 'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            
                                            {!! Form::submit("submit", ['class' => 'btn btn-primary form-control']) !!}
                                            
                                        </div>
                                    {!! Form::close() !!}
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
    </body>
</html>
