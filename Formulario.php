<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="assets/img/plataforma_011.jpg"/>
     <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/formulario.css" rel="stylesheet" />
    <link href="css/categoria.css" rel="stylesheet" />
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBfqfaJU8yJ2i63adpz4UnpZqy0p_b1h-Q&sensor=false"></script>
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
    <title>Formulario</title>
</head>
<body>
   <div id="top">
               <a href="https://www.plataformaciudadanacovid.com/mapeo.php">
        <img src="img/atras.png" alt="" style="height: 50px; width:auto; margin-top:25px;float:left;">
        </a>
    <div id="textoIZ">
       <p>PLATAFORMA CIUDADANA COVID</p> <br>
            REGIÓN YUCATÁN.
        </div>
        <div id="textoDe">
       Con <b> TÚ </b>ayuda saldremos más rápido
de esta contingencia <br>
<d id="TextRosa">DONA, SUMA, ÚNETE</d>
    </div>
    </div>
    <div id="blanco">

    </div>
   <div id="Contenido" style="text-align: center">
       
        <br>
        <p>
        BIENVENIDO AL REGISTRO EN LINEA DE INICIATIVAS
</p>
     
Por favor proporciona la información tal y como quieres que se muestre públicamente en esta plataforma.
<br>
Si tienes alguna duda al llenar el formulario, escríbenos al correo contacto@plataformaciudadanacovid.com
    <form name="formulario" id="formulario" action="php/operacion.php" method= "POST" enctype="multipart/form-data">
<div id="forma">
<div id="derecha">
<div id="TIT">
   <b>INFORMACION GENERAL</b> 
</div>

    <b style="margin-top: 20px">Nombre de la iniciativa:</b> <br>
<input type="text" id="nombre"  name="nombre" value="" autocomplete="off"><br>
<b>Descripción:*</b><br>
<p>(Cuéntanos de tu iniciativa, como surge, quienes son los beneficiarios y todo lo que quieras trasmitir)</p>
<textarea name="descripcion" id="descripcion" rows="5" cols="40" style="height: 118px"></textarea><br>

</div>
    <div id="derecha" >
    <div id="TIT">
   <b>REQUERIMIENTOS</b> 
</div>
     <b>¿Como te pueden ayudar paracontinuar con tu iniciativa?*</b><br>
    <p>Describe si quieres donaciones en efectivo (puedes especificar medios de depósito si así lo deseas), ayuda con especie, despensa, consumibles, otros.</p>
    <textarea name="ayuda" id="ayuda" rows="5" cols="40"></textarea><br>
   
 
  
    
    </div>
    <div id="derecha" >
    <div id="TIT">
   <b>PROMOTORES</b> 
</div>

    <b>Promotores:* </b><br>
 <br>
    <p>(¿Qué  persona, empresa o instituciones promueven la iniciativa?)
        
    </p><br>
    <textarea name="promotores" id="promotores" rows="5" cols="40"></textarea><br>
 
  
    
    </div>



    <div id="derecha">
  
    <div id="TIT">
   <b>REDES SOCIALES</b> 
</div>
    <b>Facebook:</b><br>
<input type="text" id="facebook"  name="facebook" value="" autocomplete="off"><br>
<b>Instagram:</b><br>
<input type="text" id="instagram"  name="instagram" value="" autocomplete="off"><br>
    
    </div>
    <div id="derecha">
    <div id="TIT">
   <b>CONTACTO</b> 
</div>
<b>Teléfono o Celular:*</b><br>
    <input type="text" id="telefon"  name="telefon" value="" autocomplete="off"><br>
    <b>Correo:*</b><br>
    <input type="text" id="correo"  name="correo" value="" autocomplete="off"><br>
    </div>
   
    <div id="derecha" >
<div id="TIT">
   <b>IMAGEN</b> 
</div>
<b>Sube una imagen*</b><br>
<p>(Añade una imagen que represente la iniciativa)</p>
    <input type="file" class="form-control" id="image" name="image" multiple  style="margin-bottom: 29px" ><br>
</div>





<div id="derecha2"  >
<div id="TIT">
    <b>UBICACIÓN</b> 
</div>
<p>Ubica tu iniciativa en el mapa. Si no tienes una dirección fija, señala un punto dentro de la ciudad. <b>*</b></p><br>
<b>Dirección:</b><br>
<input type="text" id="direccion"  name="direccion" value="" autocomplete="off"><br>
<b>Local:</b><br>
<input type="text" id="local"  name="local" value="" autocomplete="off"><br>
    
<div id="map"></div> </div>

<div id="derecha3" >
<div id="TIT">
   <b>CATEGORÍA</b> 
</div>
<b>Selecciona una categoría*</b><br>

<section id="first" class="section">
                                        <div class="container">
                                          <input type="radio" name="group1" id="radio-1"  >
                                          <label for="radio-1"><span class="radio">Insumos Médicos</span></label>
                                        </div>
                                        <div class="container">
                                          <input type="radio" name="group1" id="radio-2">
                                          <label for="radio-2"><span class="radio">Alimentación</span></label>
                                        </div>
                                        <div class="container">
                                          <input type="radio" name="group1" id="radio-3">
                                          <label for="radio-3"><span class="radio">Población Vulnerable</span></label>
                                        </div>
                                        <div class="container">
                                                <input type="radio" name="group1" id="radio-4">
                                                <label for="radio-4"><span class="radio">Otros</span></label>
                                              </div>
                                         
                                                  
                                                       
                                                        
                        
                                    </section>
</div>
<input type="hidden" id="lat"  name="lat" value="" >
<input type="hidden" id="lng"  name="lng" value="" >
<input type="hidden" id="categoria"  name="categoria" value="" >
<input type="hidden" id="tipo"  name="tipo" value="" >
<input type="hidden" id="publico"  name="publico" value="no" >
<input type="hidden" id="privacidad"  name="privacidad" value="" >
<div id="derecha4" >
<label class="containers"><p>He leído y acepto el <a href="http://plataformaciudadanacovid.com/aviso.pdf" target="_blank" style="text-decoration: none;"><b style="color: 00A2FF;">aviso de privacidad.</b></a>*</p>
  <input type="checkbox" 
   id="radio1" name="radio1" onclick="toggle1()" >
  <span class="checkmarks"></span>
</label>
     <br>
<button type="submit" id="btn_grabar" class="btn btn-success btn-sm" style="width: 100px;"><h2>Enviar</h2></button></div>
</div>
<script> 
             
             function toggle1() {
              if(radio1.checked){
        console.log( "dentro LLantas" );
        document.getElementById('privacidad').value = "Si";
    }else{
      console.log( "fuera" );
      document.getElementById('privacidad').value = "No";
    }
  

} </script>


<script> 
                
                var btnToggle = document.querySelector('#radio-1');
                btnToggle.addEventListener('click', function(event) {
                          
                            document.getElementById('tipo').value = "01";
                            document.getElementById('categoria').value = "Insumos Médicos";
                });
                var btnToggle1 = document.querySelector('#radio-2');
                btnToggle1.addEventListener('click', function(event) {
                            
                            document.getElementById('tipo').value = "02";
                            document.getElementById('categoria').value = "Alimentación";
                });
                var btnToggle2 = document.querySelector('#radio-3');
                btnToggle2.addEventListener('click', function(event) {
                         
                            document.getElementById('tipo').value = "03";
                            document.getElementById('categoria').value = "Población Vulnerable";
                });
                var btnToggle3 = document.querySelector('#radio-4');
                btnToggle3.addEventListener('click', function(event) {
                           
                            document.getElementById('tipo').value = "04";
                            document.getElementById('categoria').value = "Otros";
                });

                    </script> 



    </form>
    </div>





    <script>
        //VARIABLES GENERALES
            //declaras fuera del ready de jquery
            var nuevos_marcadores = [];
        var marcadores_bd= [];
        var mapa = null; //VARIABLE GENERAL PARA EL MAPA
        //FUNCION PARA QUITAR MARCADORES DE MAPA
        function limpiar_marcadores(lista)
        {
            for(i in lista)
            {
                //QUITAR MARCADOR DEL MAPA
                lista[i].setMap(null);
            }
        }
        $(document).on("ready", function(){
            
            //VARIABLE DE FORMULARIO
            var formulario = $("#formulario");
            
            var punto = new google.maps.LatLng(20.9753700, -89.6169600);
            var config = {
                zoom:11,
                center:punto,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
               styles:[
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
                
            };
            
            mapa = new google.maps.Map( $("#map")[0], config );
    
            google.maps.event.addListener(mapa, "click", function(event){
               var coordenadas = event.latLng.toString();
               
               coordenadas = coordenadas.replace("(", "");
               coordenadas = coordenadas.replace(")", "");
               
               var lista = coordenadas.split(",");
               
               var direccion = new google.maps.LatLng(lista[0], lista[1]);
               //PASAR LA INFORMACI�N AL FORMULARIO---------------------------------------------
               formulario.find("input[name='lat']").val(lista[0]);
               formulario.find("input[name='lng']").val(lista[1]);
      
               var marcador = new google.maps.Marker({
                   //titulo:prompt("Titulo del marcador?"),
                   position:direccion,
                   map: mapa, 
                   icon: 'img/icons/activo.png',
                   animation:google.maps.Animation.DROP,
                   draggable:false
               });
               //VIDEO 15
              // $("#collapseOne").collapse('show');
               //$("#collapseTwo").collapse('hide');
               //ALMACENAR UN MARCADOR EN EL ARRAY nuevos_marcadores
               nuevos_marcadores.push(marcador);
               
               google.maps.event.addListener(marcador, "click", function(){
    
               });
               
               //BORRAR MARCADORES NUEVOS
               limpiar_marcadores(nuevos_marcadores);
               marcador.setMap(mapa);
            });

    
            //CENTRAR EL MARCADOR AL SELECCIONARLO
            $("#select_resultados").on("click, change", function(){
              //PEQUEÑA VALIDACION
              if($(this).children().length<1)
              {
                return false;//NO HACER NADA, AL NO TENER ITEMS
              }
              var cx = $("#select_resultados option:selected").data("lat");
              var cy = $("#select_resultados option:selected").data("lng");
              //Crear variable coordenada
              var myLatLng = new google.maps.LatLng(cx, cy);
              //VARIABLE MAPA
              mapa.setCenter(myLatLng);
            });
    
    
          
          
        });
</script>
</body>
</html>