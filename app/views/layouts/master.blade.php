<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Specifix | @yield('title-tag')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,800,700,600,400,300' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="/css/main.css" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="/css/prism.css">
    <script src="/js/prism.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    @yield('top-links')

  </head>
  <body>
    @include('partials.navbar')
    @if (Session::has('successMessage'))
        <div class="alert alert-success flashbar">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger flashbar">{{{ Session::get('errorMessage') }}}</div>
    @endif
    <!-- CONTENT -->


    @yield('content')


    <!-- include('partials.footer') -->

    


    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>

    @yield('bottom-script')
    <script>tinymce.init({ selector:'textarea', plugins: "codesample", toolbar: "codesample"});</script>
  </body>
</html>
