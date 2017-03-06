<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/semantic/semantic.min.css') }}" rel="stylesheet">
    <title>lacaisse</title>
</head>
<body>
<div class="container ui">
<div class="ui secondary pointing menu">
    <a class="active green item">
        Ventes
    </a>
    <a class="item green">
        Clients
    </a>
    <a class="item green">
        Stocks
    </a>
    <a class="item green">
        Catalogue
    </a>
    <a class="item green">
        Categories
    </a>
    <div class="right menu ">
        <div class="item">
            <div class="ui icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>
        <a class="ui item red active">
            Logout
        </a>
    </div>
</div>
    @yield('content')
</div>

<script  src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('/css/semantic/semantic.min.js') }}"></script>
<script >
    $('select.dropdown')
        .dropdown()
    ;
</script>
@yield('js')
</body>
</html>