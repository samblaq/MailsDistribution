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
            {{-- Content page header --}}
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Mails From All Branches
                        <small>Send All Mails </small>
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
                                    <h3 class="box-title"><strong>Sending Mails</strong></h3>
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
                                    {!! Form::model($external , ['method' => 'POST' , 'action' => ['MailsProgressController@store' ,$external->id] ]) !!}

                                        {!! Form::hidden("code", $external->TransactionCode) !!}

                                        <div class="form-group">

                                            {!! Form::label("From", "Branch (Source)", ['class' => 'control-label']) !!}
                                            
                                            {!! Form::text("Branch_From", null, ['class' => 'form-control', 'id' => 'from' , "readonly"]) !!}
                                            
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label("To", "Branch (Destination): ", ['class' => 'control-label']) !!}
                                                
                                            {!! Form::text("Branch_To", null, ['id' => 'to' ,'class' => 'form-control', "readonly"]) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label("package", "Package Type: ", ['class' => 'control-label']) !!}
                                                    
                                            {!! Form::text("package", null, ['id' => 'package' ,'class' => 'form-control', "readonly"]) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::label("deliverymode", "Delivery Mode: ", ['class' => 'control-label']) !!}
                                                    
                                            {!! Form::select("deliverymode", ['' => 'Choose Options'] + $deliverymode , null, ['id' => 'deliverymode' ,'class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label("deliveryperson", "Delivery Person: ", ['class' => 'control-label']) !!}
                                                    
                                            {!! Form::text("deliveryperson", null, ['id' => 'deliveryperson' ,'class' => 'form-control']) !!}
                                        </div>
                                        
                                        {{-- {!! Form::hidden("code", $code) !!} --}}
                                        
                                        <div class="form-group">
                                            
                                            {!! Form::submit("Send", ['class' => 'btn btn-success form-control']) !!}
                                            
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
        <script src="{{asset('app/main.js')}}"></script>
    </body>
</html>
