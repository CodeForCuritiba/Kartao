<?php
/*
require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile': 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
});

$app->run();
*/

$postos_default_horarios = "dias úteis das 8h30 às 17h";
$postos = array(
'Rodoferroviária' => array('Av. Presidente Affonso Camargo, 330',-25.437040, -49.256569,$postos_default_horarios),
'Rua da Cidadania Boa Vista' => array('Av. Paraná, 3600 - Próx. Posto de Saúde 24h - Boa Vista',-25.385353, -49.232734,$postos_default_horarios),
'Rua da Cidadania Boqueirão' => array('Terminal do Carmo',-25.500989, -49.236959,$postos_default_horarios),
'Rua da Cidadania Pinheirinho' => array('Terminal do Pinheirinho',-25.513913, -49.295273,$postos_default_horarios),
'Rua da Cidadania Portão' => array('Terminal do Fazendinha',-25.477915, -49.327196,$postos_default_horarios),
'Rua da Cidadania Santa Felicidade' => array('Terminal Santa Felicidade',-25.400827, -49.330032,$postos_default_horarios),
'Rua da Cidadania Matriz' => array('Praça Rui Barbosa',-25.435135, -49.272574,$postos_default_horarios),
'Posto Avançado Tatuquara' => array('Rua Pero Vaz de Caminha, 560 – Tatuquara',-25.564596, -49.338420,'dias úteis das 9h às 12h e das 13h às 17h'),
);

$vendas = array(
'Travessa Moreira Garcez' => array('Em frente à galeria Tobias de Macedo',-25.428872, -49.270421),
'13 de Maio' => array('Na esquina das ruas Barão do Cerro Azul e 13 de Maio',-25.426942, -49.270775),
'Arcadas do Pelourinho' => array('Na praça Generoso Marques, em frente a Loja Riachuelo',-25.429892, -49.270780),
'Banca Bom Jesus' => array('Na Praça Rui Barbosa, perto da Rua 24 de Maio',-25.436688, -49.274118),
'Banca Bom Jesus II' => array('Na Praça Rui Barbosa, perto da Voluntários da Pátria',-25.434816, -49.272799),
'Banca Revistaria Cultura' => array('Na Praça Rui Barbosa, perto da Desembargador Westphalen',-25.434884, -49.272185),
'Banca da Cátia' => array('Na Praça Rui Barbosa, em frente ao Colégio São José',-25.435879, -49.274217),
'Banca do Cyro' => array('Na Praça Tiradentes', -25.430059, -49.271103),
'Banca Carlos Gomes' => array('Na Praça Carlos Gomes',-25.432961, -49.270134),
'Banca Staub' => array('Na Avenida Marechal Deodoro, esquina com João Negrão',-25.430353, -49.266841),
'Banca de café - Café Zacarias' => array('Na Praça Zacarias',-25.432632, -49.272945),
'Banca Passeio' => array('Na Praça 19 de Dezembro',-25.424687, -49.269595),
'Banca em frente ao Itaú' => array('No Centro Cívico, perto da Prefeitura',-25.418012, -49.268721),
'Banca Candido do Abreu' => array('No Centro Cívico, perto da Comendador Fontana',-25.418833, -49.268575),   
'Lanchonete Haluche' => array('Terminal Cabral',-25.406598, -49.252688),
'Lanches Veneto' => array('Terminal Santa Felicidade',-25.400604, -49.330547),
'Tívoli Comércio de Jornais' => array('Terminal Campina do Siqueira',-25.435908, -49.306869),
'Vital & Araújo' => array('Terminal Vila Hauer',-25.481281, -49.247183),
'Revistaria Portão' => array('Terminal Portão',-25.475975, -49.292895),
'Tailândia Doces e Salgados' => array('Terminal Centenário',-25.468831, -49.207789),
'Lanchonete do Terminal Fazendinha' => array('Terminal Fazendinha',-25.477286, -49.327147),
'Banca e Revistaria Santa Júlia' => array('Terminal Campo Comprido',-25.441483, -49.346671),
'Kerida Present\'s' => array('Na Rua da Cidadania Boa Vista',-25.385293, -49.232684),
'Estação tubo Santa Quitéria' => array('Av. Pres. Arthur Bernardes - Santa Quitéria',-25.459171, -49.302421),
);

$linhas = array(
'A Munhoz/Botânico','Ahú/Los Ângeles','Alferes Poli','Augusta','Augusto Stresser','Bigorrilho','Butiatuvinha','Canal Belém/Salgado Filho',
'Canal da Música/Vista Alegre','Cajuru','Cassiopéia','Circular Centro','Cristo Rei','Dom Ático','Estribo Ahú','Estudante','Fernando de Noronha',
'Formosa','Fredolin Wolf','Guabirotuba','Interhospitais','Itupava/Hospital Militar','Jardim Arroio','Jardim Esplanada','Jardim Social/Batel',
'José Culpi','Julio Graff','Laranjeiras','Lindóia','Marechal Hermes/Santa Efigênia','Mateus Leme','Mercúrio','Mossunguê','Nilo Peçanha',
'Nossa Senhora de Nazaré','Novo Mundo','Ouro Verde/ Vila Bádia','Paineiras','Palotinos','Passaúna','Pinheirinho/CIC','Portão',
'Portão/Santa Bernadethe (Linha Verde)','Quartel General','São Benedito','São Bernardo','São João','São Jorge','Santa Amélia','Santa Bárbara',
'Santa Gema','Santa Quitéria','Solar','Tingui','Tramontina','Universidades','Vila Izabel','Vila Macedo','Vila Marqueto','Vila Rosinha',
'Vila Suíça','Veneza','Vila Velha/Buriti'
);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	<!-- site description -->
    <title>Ver o mapa do Cartão Transporte de Curitiba: onde emitir e carregar o seu cartão.</title>
    <meta name="description" content="Mapa dos lugares onde emitir e carregar seu cartão transporte da URBS em Curitiba">
    <meta name="author" content="Kartao.com.br">
    <meta name="keywords" content="cartão, transporte, onibus, curitiba, mapa, urbs, usuário, banca">

    <!-- meta OG -->    
    <meta property="og:title" content="Ver o mapa do Cartão Transporte de Curitiba: onde emitir e carregar o seu"/>
    <meta property="og:site_name" content="Kartao.com.br"/>  
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Mapa dos lugares onde emitir e carregar seu cartão transporte da URBS em Curitiba"/> 
    <?php $domain = isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:$_SERVER['SERVER_NAME']; ?>
    <meta property="og:url" content="http://<?php echo $domain; ?>" />
    <meta property="og:image" content="http://<?php echo $domain; ?>/assets/img/kartao.jpg"/>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="assets/css/kartao.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
var map;
var defaultLatLng = new google.maps.LatLng(-25.428954,-49.267137);
var myLatlng  = defaultLatLng;
function initialize() {
  if(navigator.geolocation) {
      success = function(position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        myLatlng = new google.maps.LatLng(lat, lng);
        map.setCenter(myLatlng);
        zoom = ((lat > -25.439) && (lat < -25.415) && (lng > -49.275) && (lng < -49.262))?16:13;
        map.setZoom(zoom);

	    var marker = new google.maps.Marker({
	        map: map,
	        position: new google.maps.LatLng(lat,lng),
	        title: 'Você esta aqui!',
	        icon: 'assets/img/you.png',
	    });

      };
      error = function() { console.log('Geocoding failure'); }

      navigator.geolocation.getCurrentPosition(success,error);
  }

  var mapOptions = {
    zoom: 11,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    panControl: false,
    scaleControl: false,
    scrollwheel: false,
	mapTypeControlOptions: {
		style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        	position: google.maps.ControlPosition.BOTTOM_RIGHT
	},
}
/*
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    mapOptions['draggable'] = false
  }
*/
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

<?php 
    foreach ($postos as $title => $posto) {
        $icon = 'assets/img/posto.png';
        echo 'drawMarker("'.$title.'","'.$posto[0],'",'.$posto[1].','.$posto[2].','.(isset($posto[3])?'"'.$posto[3].'"':null).',"'.$icon.'",50);';
    }
?>

<?php 
    foreach ($vendas as $title => $venda) {
        $icon = 'assets/img/venda.png';
        echo 'drawMarker("'.$title.'","'.$venda[0],'",'.$venda[1].','.$venda[2].','.(isset($venda[3])?'"'.$venda[3].'"':'null').',"'.$icon.'",40);';
    }
?>

}

var windowopen;
function drawMarker(title,address,lat,lng,openhours,icon,size) {
    var myIcon = new google.maps.MarkerImage(icon, null, null, null, new google.maps.Size(size,size*1.45));
myIcon = icon;
    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat,lng),
        title: title,
        icon: myIcon,
    });

    content = '<div id="content"><h3>' + title + '</h3><p>' + address;

    link = 'http://maps.google.com/maps?dirflg=w&daddr=' + lat + ',' + lng;
    link = '<br><a class="link-map" target="map" href="' + link + '">Como ir?</a>';
    
    if (openhours) content = content + '<br/>Aberto ' + openhours;
    content = content + link + '</p>' + '</div>';

    var infowindow = new google.maps.InfoWindow({
        content:  content,
    });

	google.maps.event.addListener(infowindow, 'domready', function() {
        $('.link-map').each(function() {
        	this.href = this.href + '&saddr=' + myLatlng.lat() + ',' + myLatlng.lng();
        });
	});

    google.maps.event.addListener(marker, 'click', function() {
        if (windowopen) windowopen.close();
        infowindow.open(map,marker);
        windowopen = infowindow;
    });

	function closeSideBar(e) {
		$("#menu-close").click();    	
	}
	map.addListener('click', closeSideBar);
	
	$('#sidebar-wrapper').on('swiperight',closeSideBar)
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

  </head>

  <body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-light btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper" class="active">
    	<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <div class="brand">
            <h2>Cartão Transporte de Curitiba</h2>
            <div>
	        	<img src="assets/img/venda.png"  class="pull-left"/>
	        	<div>
	        		Onde comprar e recarregar cartões avulsos ou recarregar cartões usuários
	        	</div>
            </div>
            <div>
	        	<img src="assets/img/posto.png"  class="pull-left"/>
	        	<div>
	        		Onde emitir seu cartão transporte usuário
	        	</div>
            </div>
        </div>
        <div class="footer">
        	<table class="block_urbs">
        		<tr>
        			<td>
        				Saiba mais sobre o cartão transporte
        			</td>
        			<td>
		        		<a href="http://www.urbs.curitiba.pr.gov.br/utilidades/cartao-transporte" target="urbs">
		        			<img src="assets/img/urbs.png" class="img_urbs" title="URBS" alt="URBS"/>
		        		</a>
        			</td>
        		</tr>
        	</table>
        	<table class="block_cfc">
        		<tr>
        			<td>
        				Com a colaboração de 	
        			</td>
        			<td>
		        		<a href="http://www.codeforamerica.org/brigade/Code-for-Curitiba" target="codeforcuritiba">
			        		<img src="assets/img/codeforcuritiba.png" class="img_codeforcuritiba" 
			        			title="Code For Curitiba" alt="Code For Curitiba"/>
		        		</a>
        			</td>
        		</tr>
        	</table>
        </div>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
    	<div class="logo"><img src="assets/img/kartao.png" title="Kartão" alt="Kartão" width="200px" /></div>
        <div id="map-canvas"></div>
        <div class="title">
            <h1>Mapa dos lugares aonde comprar ou recarregar seu cartão transporte da URBS</h1>
            <h2>Cartão Transporte de Curitiba</h2>
        </div>
        <!--a href="#about" class="btn btn-dark btn-lg">Find Out More</a-->
    </header>
    
    <section id="places" class="places">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <h2>Onde emitir o Cartão Transporte Usuário?</h2>
                    <?php foreach ($postos as $title => $place) : ?>
                    <div class="place">
                        <h3><?php echo $title; ?></h3>
                        <p>
                            <span class="address"><?php echo $place[0]; ?></span><br/>
                            <?php if (isset($place[3])) : ?>
                                <span class="openhours">Aberto <?php echo $place[3]; ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-sm-4 text-center">
           	    	<iframe width="100%" height="240px" src="https://www.youtube-nocookie.com/embed/W2JtiwAGVdk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <h2>Quais são as linhas que só aceitam o cartão transporte?</h2>
                    <ul>
                        <?php foreach($linhas as $linha) : ?>
                            <li><?php echo $linha; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <h2>Onde carregar o Cartão Transporte Usuário?</h2>
                    <h2>Onde comprar e carregar o Cartão Transporte Avulso?</h2>
                    <?php foreach ($vendas as $title => $place) : ?>
                    <div class="place">
                        <h3><?php echo $title; ?></h3>
                        <p>
                            <span class="address"><?php echo $place[0]; ?></span><br/>
                            <?php if (isset($place[3])) : ?>
                                <span class="openhours">Aberto <?php echo $place[3]; ?></span>
                            <?php endif; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Kartao.com.br</strong>
                    </h4>
                 </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery.mobile.custom.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").removeClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-65707639-1', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>

