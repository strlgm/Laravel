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