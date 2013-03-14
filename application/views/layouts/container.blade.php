<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Daxian Group</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/dg.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Sans') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Serif:400,700') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Nova+Square') }}
</head>
<body>
    <div id="wrapper">
        <div id="scroller">
            <div id="main" role="main">
                @yield('content')
            </div>
        </div>
    </div>

    {{ HTML::script('js/libs/jquery.suite.min.js') }}
    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/script.js') }}
    <!-- jQuery Suite: jQuery, stellar, mousewheel, ui -->
    <!--{{ HTML::script('js/iscroll.js') }} -->
    <!--[if lt IE 7 ]>
        {{ HTML::script('js/libs/dd_belatedpng.js') }}
        <script>DD_belatedPNG.fix("img, .png_bg");
    <![endif]-->
</body>
</html>