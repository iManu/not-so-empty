<?php
header("Content-Type: text/html; charset=utf-8");
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr-FR"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  
	<title>gabarit initializr</title>
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
<!--[if IE 7]>
  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
<![endif]-->
  
  <script src="js/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 9]>
    <p class="chromeframe"><i class="icon-warning-sign">&nbsp;</i>Vous utilisez un navigateur obsol&egrave;te. <a href="http://browsehappy.com/">Mettez &agrave; jour votre navigateur aujourd'hui</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour mieux visualiser cette page.</p>
<![endif]-->
	<!-- ===================== HEADER -->
  <header>
  
  </header>
  <!-- ===================== MAIN -->
  
  <!-- ===================== FOOTER -->
  <footer>
  
  </footer>
  <!-- Javascript -->
  <script>
    Modernizr.load([
      {
       
		both : [ '//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js', 'js/script.js' ],
        complete: function () {
          if ( !window.jQuery ) Modernizr.load('js/jquery-1.8.2.min.js');
		  
        }
      }
    ]);
  </script>
  <!--
  Merci @twitter, @mdo et @fat.
  Bootstrap code licensed under the Apache License v2.0
  Icons glyphicons.com licensed under CC BY 3.0
  -->
</body>
</html>
