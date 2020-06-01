<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="assets/img/plataforma_011.jpg"/>
     <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/index.css" rel="stylesheet" />
    <link href="css/contenido.css" rel="stylesheet" />
    <link href="css/menu.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="css/filtrado.css" rel="stylesheet" />
    <title>PLATAFORMA CIUDADANA COVID
REGIÓN YUCATÁN.</title>
</head>
<body>


    <div id="top">
    <div id="barraSup">
        <div id="textoIZ">
       <p>PLATAFORMA CIUDADANA COVID</p> <br>
            REGIÓN YUCATÁN..
        </div>
        <div id="textoDe">
       Con <b> TÚ </b>ayuda saldremos más rápido
de esta contingencia <br>
<d id="TextRosa">DONA, SUMA, ÚNETE</d>
        </div>


    </div>

    <div id="barraSupSec">
        <div id="RosaD">
<div id="btnCerrar" onclick="divOcul()">
&#10094;  REGRESAR
</div>
        </div>

        <div id="azulM">
            <div id="verIn"onclick="divVer()" >
                <p>VER&#10095;</p>
                
            </div>
        <div id="menu">
    <!--<a href="https://www.plataformaciudadanacovid.com" id="letra" style="text-decoration:none; float:left; margin-right:20px; "><p style="color: white;">INICIO</p></a>-->

            <a href="Formulario.php" id="letra" style="text-decoration:none; float:left; "><p style="color: white;">AÑADIR INICIATIVA</p></a>
</div>
        </div>
    </div>
    </div>

    <div id="Contenido">
<!-- inicio del contenido-->
<ul>
    
    <li>
        <div id="Cate">
           <h1 id="titulo">titulo</h1> 
            
        </div>
    </li>
    <li>
        <img id="foto" src="img/contenido/photo.png" alt="">
    </li>
<li>
    <div id="textConte">
    <h2 id="Cate">
            Descripción
        </h2>
        <p id="descripcion">
      
      </p>
        <br>
    </div>
</li>
<li>
<div id="textConte">
    <h2 id="Cate">¿Como puedes ayudar?</h2>
    <p id="ayudar">

    </p>
    <br>
    </div>
</li>

<li>
<div id="textConte">
    <h2 id="Cate">Promotores</h2>
    <p id="promotores">
       
    </p>
    <br>
    </div>
</li>

    <li>
    <div id="textConte">
            <h2 id="Cate">Contacto</h2>
            <br>
            <p id="telefono"></p>
            <br>
            <p id="correo"></p>

        </div>
    </li>
    <li>
       <div id="textConte" style="background: #EEEEEE; margin:0; margin-top:20px;">
            <h2 id="Cate" style="color: #EF5FA7;">Redes sociales</h2>
            <br>
 <a href="" id="enlace" target="_blank">
           <img class="redes" id="facebook" src="img/contenido/facebook.png" alt="" style="margin-right: 20px;margin-left:35%;">
          <a href=""></a>
          <a href=""  id="enlace" target="_blank">
            <img class="redes" id="instagram" src="img/contenido/instagram.png" alt=""></a>


        </div>
    </li>
</ul>










<!-- fin del contenido-->
    </div>

    <div id="map" >
        
    </div>
<div id="reglas">
<img src="img/contenido/mapmsj.png" alt="">
Para visualizar la información de las iniciativas por favor haz click sobre algún icono del mapa.
</div>
        <div id="filtradoButtom">
       
            <form method="post" >
              <p>filtrado</p>
				<select name="xregistros">
					<option value="">categorias</option>
					<option value="02">Alimentación</option>
					<option value="01">Insumos médicos</option>
          <option value="03">Población vulnerable</option>
          <option value="04">Otros</option>
				</select>
    
				<button name="buscar" type="submit">Buscar</button>
			</form>
        </div>
                <div id="footer">
        <div class="copyright">
            &copy; Copyright <strong>FabCity Yucatán A.C.</strong>.  <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /> 
          </div>
        </div>

    <script src="js/main.js" charset="utf-8"></script>
 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfqfaJU8yJ2i63adpz4UnpZqy0p_b1h-Q&callback=initMap">
    </script>
    <?php
  $publicos="si";
            $con = mysqli_connect("localhost", "platafo7_covid", "datosgeneralescovid2020", "platafo7_covid") or die("Error en la conexión.". mysqli_errno($con));
          

$limit=$_POST['xregistros'];

$publico = "si";
////////////////////// BOTON BUSCAR //////////////////////////////////////
 $where = "where publico='".$publico."'";
if (isset($_POST['buscar']))
{
 
  $limit=$_POST['xregistros'];
  switch ($limit) {
    case "":
      $where = "where publico='".$publico."'";
    break;
    case "01":
      $where = "where publico= '".$publico."' and tipo = '".$limit."'";
  
        break;
        case "02":
          $where = "where publico= '".$publico."' and tipo = '".$limit."'";
     
            break;
              case "03":
          $where = "where publico= '".$publico."' and tipo = '".$limit."'";
     
            break;
              case "04":
          $where = "where publico= '".$publico."' and tipo = '".$limit."'";
     
            break;
              case "05":
          $where = "where publico= '".$publico."' and tipo = '".$limit."'";
     
            break;
    default:
    $where="WHERE publico='".$publico."'";
          }

}
            
            
             $query = "SELECT * FROM iniciativas $where";
            $resultado = mysqli_query($con,$query);
            
          ?>
          <script type="text/javascript">
            var bcn = new google.maps.LatLng(20.9753700, -89.6169600);
            var mapOptions = {
                center: bcn,
                zoom: 9,
                zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_CENTER
          },
          mapTypeControl: false,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        position: google.maps.ControlPosition.TOP_CENTER
    },
          scaleControl: false,
          streetViewControl: false,
          streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
          },
          fullscreenControl: false,
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
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
           
          </script>
            <?php
              $i=1;
            
             
              while ($data = mysqli_fetch_assoc($resultado)) {
                //echo "".$data['nombre']."";
           
            ?>
            <script>
              var marker<?php echo $i;?> = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng( parseFloat(<?php echo $data['lat']; ?>),  parseFloat(<?php echo $data['lng']; ?>)),
                
                title: <?php echo "'".$data['nombre']."'"; ?>,
                icon: 'img/icons/<?php echo $data['tipo']; ?>.png',
              draggable: false


              });
 
var contentString = "<h2 style='font-family: oswal;'><span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span>&#160;<?php echo "".utf8_encode($data['nombre']).""; ?></h2><p><span class='glyphicon glyphicon-screenshot' aria-hidden='true'></span>&#160;<b style='font-family: oswal;'>Promotores :</b><br style='font-family: oswal;'> <span class='glyphicon glyphicon-asterisk' aria-hidden='true'></span>&#160;<?php echo "".$data['promotores'].""; ?></p><p><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>&#160;<br></p>"

              var infowindow<?php echo $i;?> = new google.maps.InfoWindow({
                content: contentString,
                 
              });
            
              google.maps.event.addListener(marker<?php echo $i;?>, 'click', function() {
                   if(!marker<?php echo $i;?>.open){ 
                    infowindow<?php echo $i;?>.open(map,marker<?php echo $i;?>);
                     marker<?php echo $i;?>.open = true; 
                } 
                else{
                    infowindow<?php echo $i;?>.close(map,marker<?php echo $i;?>);
                     marker<?php echo $i;?>.open = false; 
                     }


                    infowindow<?php echo $i;?>.open(map,marker<?php echo $i;?>);
                     setTimeout(function () { infowindow<?php echo $i;?>.close(map,marker<?php echo $i;?>); }, 5000);

                  
                  
             
             

                   
 
         var id= <?php echo "".$data['idIniciativa'].""; ?>;
                 nombre= new String("<?php echo "".utf8_encode($data['nombre']).""; ?>");
                 var nombres = nombre;
                 descripcion= new String('<?php echo "".str_replace("\n", "<br>",$data['descripcion']).""; ?>');
                 local= new String("<?php echo "".$data['local'].""; ?>");
                 direccion= new String("<?php echo "".$data['direccion'].""; ?>");
                 categoria=new String("<?php echo "".$data['categoria'].""; ?>");
                 telefon= new String("<?php echo "".$data['telefon'].""; ?>");
                 foto= new String("<?php echo "".$data['foto'].""; ?>");
                 promotores= new String('<?php echo "".str_replace("\n", "<br>",$data['promotores']).""; ?>');
                 correo= new String("<?php echo "".$data['correo'].""; ?>");
                 facebook= new String("<?php echo "".$data['facebook'].""; ?>");
                 instagram= new String("<?php echo "".$data['instagram'].""; ?>");
                 tipo= new String("<?php echo "".$data['tipo'].""; ?>");
                  ayudar= "<?php echo "".str_replace("\n", "<br>",$data['ayuda']).""; ?>";
              datos(nombres, descripcion, local, direccion, categoria, telefon, foto, promotores, correo, facebook, instagram, tipo, ayudar);


              });




              function datos(nombres, descripcion, local, direccion, categoria, telefon, foto, promotores, correo, facebook, instagram, tipo, ayudar){
                     
verInformacion();
     document.getElementById('titulo').innerHTML = nombres;
    $("#foto").attr("src",foto);
   document.getElementById("foto").src=foto;
    document.getElementById('descripcion').innerHTML = descripcion;
    document.getElementById('ayudar').innerHTML = ayudar;
    document.getElementById('promotores').innerHTML = promotores;
    document.getElementById('telefono').innerHTML = "Telefono: "+telefon;
    document.getElementById('correo').innerHTML = "Correo: "+correo;
    document.getElementById('facebook').innerHTML = facebook;
    document.getElementById('instagram').innerHTML = instagram;
    document.getElementById('enlace').setAttribute('href', facebook );
    document.getElementById('enlaces').setAttribute('href', instagram );
    
}
function verInformacion(){
    document.getElementById("reglas").style.visibility="hidden";
  $("#RosaD").addClass("active");
    $("#btnCerrar").addClass("ocul");
    $("#Contenido").addClass("actives");
    $("#azulM").addClass("options");
    $("#verIn").addClass("ver");
    $("#filtradoButtom").addClass("filtro");
    $("#map").addClass("nmap");


}

            </script>
            <?php
                           
           
                $i++;
               
              }
               
             // echo mysqli_close($con);
              mysqli_close($con);
            ?>
<?
				echo $mensaje;
			?>








</body>
</html>