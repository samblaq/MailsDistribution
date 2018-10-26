<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="glyphicon glyphicon-user"></i>
        <span>{{ Auth::user()->name }}<i class="caret"></i></span>
    </a>
    <ul class="dropdown-menu">
        <li  style="background-color: #333!important;" class="user-header bg-light-blue">
           <p>
               {{  Auth::user()->name  }}
               {{  Auth::user()->email }}<br>
               {{  Auth::user()->username  }}<br>
           </p>
        </li>
        <li class="user-body">
            <div class="pull-right">
               <a href="{{ url('Sessionlogout') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
        </li>
    </ul>
</li>