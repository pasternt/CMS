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
                    <li @if($current == 'user') class="active" @endif><a href="#">Nutzer anlegen</a></li>
                    <li @if($current == 'welcome') class="active" @endif><a href="javascript.html">JavaScript</a></li>
                </ul>
            </div>
            </div>
        </div>
        </nav>
        </div>
    <div class="container">
        <h3>Moin Moin ;)</h3>
        <hr>
        <p>Lange nicht gesehen, oder...? Tja, das &auml;ndert sich nun!</p>
        <p>Wir sind erwachsener geworden und das CMS gleich mit. Es gibte eine komplett neue Basis - von Anfang
        professioneller und vorallem: sicherer!</p>
        <p>Auf jeden Fall sch&ouml;n das du zu uns gefunden hast. Lass uns auf die Reise gehen und die Installation
        beginnen!</p>
        <div style="text-align: center;">
            <a  class="waves-effect waves-light btn" href="{{URL::to('install/user')}}">Los geht's!</a>
        </div>

    </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{URL::to('/assets/admin')}}/js/materialize.min.js"></script>
    <script>
        $(".button-collapse").sideNav();
    </script>
    </body>
  </html>
        