<?php require 'data.php';?>
<!DOCTYPE html>
<html lang="pt_BR">
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

    <link rel="shortcut icon" href="favicon.ico"></link>

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- site description -->
    <title>Ver o mapa do cartão transporte para os ônibus de Curitiba: onde emitir e carregar o seu cartão.</title>

    <meta name="description" content="Que usuário de ônibus de Curitiba nunca se viu perdido sem saber onde recarregar seu cartão de transporte? Por isso criamos o Kartão, um mapa simples e intuitivo onde se pode consultar o local mais próximo de você para recarga ou compra do seu cartão transporte da cidade.">
    <meta name="author" content="Kartao.com.br">
    <meta name="keywords" content="cartão, transporte, onibus, curitiba, mapa, urbs, usuário, banca">

    <!-- meta OG -->
    <meta property="og:title" content="Ver o mapa do cartão transporte para os ônibus de Curitiba: onde emitir e carregar o seu cartão."/>
    <meta property="og:site_name" content="Kartao.com.br"/>
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Que usuário de ônibus de Curitiba nunca se viu perdido sem saber onde recarregar seu cartão de transporte? Por isso criamos o Kartão, um mapa simples e intuitivo onde se pode consultar o local mais próximo de você para recarga ou compra do seu cartão transporte da cidade."/>
    <?php $domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME'];?>
    <meta property="og:url" content="http://kartao.com.br" />
    <meta property="og:image" content="http://kartao.com.br/assets/img/kartao.jpg"/>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="assets/css/kartao.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script src="assets/js/app.js"></script>
    <script>
        document.postos = <?php echo json_encode($postos);?>;
        document.vendas = <?php echo json_encode($vendas);?>;
        console.log(Object.keys(document.vendas).length);
    </script>
</head>
<body>

<div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=871255366303296";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-light btn-lg toggle"><i class="fa fa-bars"></i></a>

    <nav id="sidebar-wrapper" class="active">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>

        <div class="brand">
            <img src="assets/img/kartao.png" title="Kartão" alt="Kartão" class="logo" />
        </div>

        <div class="content">
            <h4>Ache fácil os lugares onde:</h4>

            <table>
                <thead>
                    <tr>
                        <th width="20%"></th>
                        <th width="80%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="image">
                            <img src="assets/img/venda.png"/>
                        </td>
                        <td>
                            <p>Comprar e recarregar
                            <br>cartões avulsos ou cartões usuários</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="image">
                            <img src="assets/img/posto.png"/>
                        </td>
                        <td>
                            <p>Emitir seu cartão transporte usuário</p>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="footer">
            <div class="share">
                <div class="fb-share-button" data-href="http://kartao.com.br" data-layout="button_count"></div>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://kartao.com.br" data-text="Mapa para comprar e recarregar cartão transporte em Curitiba" data-via="KartaoCuritiba">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <div class="references">
                <table class="block_urbs">
                    <tr>
                        <td>
                            Saiba mais sobre o cartão transporte
                        </td>
                        <td>
                            <a href="http://www.urbs.curitiba.pr.gov.br/utilidades/cartao-transporte" target="urbs">
                                <img src="assets/img/urbs.png" class="img_urbs img_legend" title="URBS" alt="URBS"/>
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
                                <img src="assets/img/codeforcuritiba.png" class="img_codeforcuritiba img_legend"
                                title="Code For Curitiba" alt="Code For Curitiba"/>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="logo">          <img src="assets/img/kartao.png" title="Kartão" alt="Kartão" width="150px"/>
        </div>
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

                    <?php foreach ($postos as $title => $place): ?>

                        <div class="place">
                            <h3><?php echo $title;?></h3>
                            <p>
                                <span class="address"><?php echo $place[0];?></span><br/>
                                <?php if (isset($place[3])): ?>
                                    <span class="openhours">Aberto <?php echo $place[3];?></span>
                                <?php endif;?>
                            </p>
                        </div>

                    <?php endforeach;?>

                </div>
                <div class="col-sm-4 text-center">
                    <iframe width="100%" height="240px" src="https://www.youtube-nocookie.com/embed/W2JtiwAGVdk?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <h2>Quais são as linhas que só aceitam o cartão transporte?</h2>
                    <ul>
                        <?php foreach ($linhas as $linha): ?>
                            <li><?php echo $linha;?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <div class="col-sm-4 text-center">
                    <h2>Onde carregar o Cartão Transporte Usuário?</h2>
                    <h2>Onde comprar e carregar o Cartão Transporte Avulso?</h2>
                    <?php foreach ($vendas as $title => $place): ?>
                        <div class="place">
                            <h3><?php echo $title;?></h3>
                            <p>
                                <span class="address"><?php echo $place[0];?></span><br/>
                                <?php if (isset($place[3])): ?>
                                    <span class="openhours">Aberto <?php echo $place[3];?></span>
                                <?php endif;?>
                            </p>
                        </div>
                    <?php endforeach;?>
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
