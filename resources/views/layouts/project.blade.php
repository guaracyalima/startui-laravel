<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bom Pastor</title>
    @include('assets._css')
</head>
<body class="with-side-menu control-panel control-panel-compact">

@include('template._header')
@include('template._sidebar')


<div class="page-content">
    @yield('content')
</div>

@include('assets._js')
</body>
</html>
