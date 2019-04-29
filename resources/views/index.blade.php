<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Admin::title() }} @if($header) | {{ $header }}@endif</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    {!! Admin::css() !!}

    <script src="{{ Admin::jQuery() }}"></script>
    {!! Admin::headerJs() !!}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
    .skin-blue-light .sidebar-menu>li:hover>a, .skin-blue-light .sidebar-menu>li.active>a,.skin-blue-light .sidebar .sidebar-menu>.treeview>a {
        color:white;
        background: #398eba;
        font-size: 14px;
    }
    .skin-blue-light .treeview-menu>li.active>a, .skin-blue-light .treeview-menu>li>a:hover {
        color:white;
        background:#bbbbbb;
    }
    .skin-blue-light .treeview-menu>li>a {
        color:black;
        background: white;
    }
    thead {
        color: white;
        background: #398eba;
    }
    th {
        text-align: center;
    }
    td {
        text-align: center;
    }
    body {
        font-size: 12px;
    }
    .box-body {
        padding: 4px;
    }
    .form-group {
        margin-bottom: 7px;
    }
    .box-header .box-title {
        font-size: 14px;
        font-weight: 600;
    }
    tr {
        cursor: pointer;
    }
</style>
</head>

<body class="hold-transition {{config('admin.skin')}} {{join(' ', config('admin.layout'))}}">
<div class="wrapper">

    @include('admin::partials.header')

    @include('admin::partials.sidebar')

    <div class="content-wrapper" id="pjax-container">
        <div id="app">
        @yield('content')
        </div>
        {!! Admin::script() !!}
    </div>

    @include('admin::partials.footer')

</div>

<script>
    function LA() {}
    LA.token = "{{ csrf_token() }}";
</script>

<!-- REQUIRED JS SCRIPTS -->
{!! Admin::js() !!}

</body>
</html>
