<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/libs.css') }}">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="dropdown-menu">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">HTML</a></li>
                <li><a tabindex="-1" href="#">CSS</a></li>

                <li class="dropdown-submmenu">
                    <a class="test" tabindex="-1" href="#">New Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="test" tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li><a class="test" tabindex="-1" href="#">2nd level dropdown</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="test">Another Dropdown <spa class="caret"></spa></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">3rd Level dropdonw</a></li>
                                <li><a href="#">3rd Level Dropdown</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <script src="{{ asset('js/min.js') }}" type="text/javascript"></script>
    
    

</body>
</html>

