<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manager | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googlexapis.com/css?family=Abel" rel="stylesheet">
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
                        Internal Delivery
                        <small>Manage all pending Internal Deliveries</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                                            
                                            {{-- {!! Form::open(['method' => 'POST' , 'action' => 'APKSearchController@store']) !!}
                                                
                                                {!! Form::text("table_search",null, ['class' => 'form-control input-sm pull-right', 'style' => 'width:150px' , 'placeholder' => 'Search']) !!}
                                                
                                                <div class="input-group-btn">
                                                    <button type="submit" name="submit_table_search" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            {!! Form::close() !!} --}}
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Transaction #</th>
                                                <th>Branch</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Comment</th>
                                                <th>Date</th>
                                                <th>Acknowledgement</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            @if($delivers)
                                                @foreach($delivers as $deliver)
                                                    <tr>
                                                        <td>{{ $deliver->TransactionCode }}</td>
                                                        <td>{{ $deliver->Branch }}</td>
                                                        <td>{{ $deliver->Name }}</td>
                                                        <td>{{ $deliver->Department }}</td>
                                                        <td>{{ $deliver->Comment }}</td>
                                                        <td>{{ $deliver->Date }}</td>
                                                        <td>
                                                            <form action="">
                                                                <input type="checkbox" name="acknowledge" id="acknowledge">           <input type="submit" name="submit" value="Ack" class="btn btn-info">
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('Department.edit', $deliver->id) }}" class="btn btn-warning">Edit</a>
                                                            <a href="">Return</a>
                                                            {!! Form::open(['method' => 'delete' , 'route' => ['Department.destroy' , $deliver->id]]) !!}
                                                                {!! Form::submit("Delete", ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        </td>   
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    {!! $delivers->render() !!}
                    
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
