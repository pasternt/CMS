  <html>
    <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{URL::to('/assets/admin')}}/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{URL::to('/assets/admin')}}/css/additional.css"  media="screen,projection"/>
        <title>{{$page}} - pasterntCMS</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
    <!--Sidebar -->
    <div class="navbar-fixed">

        <nav>
            <div class="nav-wrapper">
                <div class="container">
                <div class="col s12"style="padding-left: 0.75em; padding-right: 0.75em;" >
                <a href="#" class="brand-logo" >pasterntCMS</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li @if($current == 'welcome') class="active" @endif><a href="#">Willkommen!</a></li>
                    <li @if($current == 'database') class="active" @endif><a href="#">Datenbankdetails angeben</a></li>
                    <li @if($current == 'user') class="active" @endif><a href="#">Nutzer anlegen</a></li>
                    <li @if($current == 'finish') class="active" @endif><a href="#">Fertig!</a></li>
                </ul>
            </div>
            </div>
        </div>
        </nav>
        </div>
    <div class="container">
        @yield('content')

    </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{URL::to('/assets/admin')}}/js/materialize.min.js"></script>
    <script>
        $(".button-collapse").sideNav();
    </script>
    </body>
  </html>
        