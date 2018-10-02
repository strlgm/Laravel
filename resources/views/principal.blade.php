
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/svg+xml" href="{{asset ('img/logoinf.png')}}"  sizes="any">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La Ventana</title>
        <link rel="stylesheet" href="{{asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{asset('css/mobile.css') }}" />
        <link rel="stylesheet" href="{{asset('css/banner.css') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="{{ asset('js/altura.js')}}"></script>
<script >
    $(function() {
    var pull = $('#pull');
    menu = $('nav ul');
    menuHeight = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(w > 320 && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});
    </script>
</head>
<body>

<nav>
<img class="logo" src="{{asset ('img/logosup.png')}}"/>
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="proyecto">Conoce el Proyecto</a></li>
        <li><a href="#">Mi Kit</a></li>
        <li><a href="#">Videos</a></li>
        <br clear="all" />
    </ul>
    <a id="pull" href="#">LaVentana</a>
</nav>
<div id="content" >
<div  id="info">
@yield('contenido')

 
</div>

  </div>

 <footer>
        <div id="footerinf">
    <p>Proyecto nacido en LABICxLaPaz, Pasto Colombia 2018 </p>
</div>
    <img class="logoin" src="{{asset ('img/logoinf.png')}}"/>
 </footer>

</body>
    </html>