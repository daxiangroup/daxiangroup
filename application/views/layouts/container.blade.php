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
    <meta name="viewport" content="width=device-width">
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/dg.css') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Lobster+Two:700&v2') }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Droid+Sans') }}
</head>
<body>
    <header>

    </header>
    <div id="main" role="main">
        @yield('content')
    </div>
    <footer>

    </footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

    {{ HTML::script('js/plugins.js') }}
    {{ HTML::script('js/script.js') }}
    {{ HTML::script('js/libs/jquery.stellar.js') }}
    {{ HTML::script('js/libs/scrollability.js') }}
    <!--[if lt IE 7 ]>
        {{ HTML::script('js/libs/dd_belatedpng.js') }}
        <script>DD_belatedPNG.fix("img, .png_bg");
    <![endif]-->
</body>
</html>