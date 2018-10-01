
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/svg+xml" href="{{asset ('img/logoinf.png')}}"  sizes="any">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La Ventana</title>
        <link rel="stylesheet" href="{{asset('css/style.css') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
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

<script>
$(function () {
function obtenerAlto( obj, alto ) {
    if (alto<900){
   
            document.getElementByClassName("slider").style.height=alto+"px";
            document.getElementById("info").style.height=alto+"px";
            document.getElementById("content").style.height=alto+"px";
            document.getElementById("content").style.paddingTop="99px";
    }
    
    alto = alto-180;
 document.getElementById("info").style.height=alto+"px";
 document.getElementById("content").style.height=alto+"px";
document.getElementById("content").style.paddingTop="99px";
}


obtenerAlto( "ventana", $( document).height() );    
$(window).resize(function(){
obtenerAlto( "ventana", $( document ).height() );
     
});
});
</script>



</head>
<body>

<nav>
<img class="logo" src="{{asset ('img/logosup.png')}}"/>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Conoce el Proyecto</a></li>
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