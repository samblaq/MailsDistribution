<ul class="sidebar-menu">
    <li>
        <a href="{{ route('dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>
   
    <li>
        <a href="{{ route('apk.create') }}">
            <i class="fa fa-users"></i> <span>APK</span> 
        </a>
    </li>
    <li>
        <a href="{{ route('dhl.create') }}">
            <i class="fa fa-users"></i> <span>DHL</span>
        </a>
    </li>
    <li>
        <a href="{{ route('GhanaPost.create') }}">
            <i class="fa fa-users"></i> <span>Ghana Post</span> 
        </a>
    </li>
    <li>
        <a href="{{ route('Acknowledgement.index') }}">
            <i class="fa fa-users"></i> <span>Acknowledge</span> 
        </a>
    </li>
    <br><br><br>
    <li>
        <a href="{{ route('Department.create') }}">
            <i class="fa fa-users"></i><span>Internal Dispatch</span>
        </a>
    </li>
    <li>
        <a href="{{ route('Department.index') }}">
            <i class="fa fa-users"></i><span>Pending Delivery</span>
        </a>
    </li>
    <br><br><br>
    <li>
        <a href="{{ route('Progress.index') }}">
            <i class="fa fa-users"></i><span>Mails Acknowledgement</span>
        </a>
    </li>
    <li>
        <a href="{{ route('Mails.index') }}">
            <i class="fa fa-users"></i><span>Mails From all Branches</span>
        </a>
    </li>
    <li>
        <a href="{{ route('Mails.create') }}">
            <i class="fa fa-users"></i><span>Receive Mails</span>
        </a>
    </li>
    <li>
        <a href="{{ route('Progress.create') }}">
            <i class="fa fa-users"></i><span>Mails In Transit</span>
        </a>
    </li>
</ul>