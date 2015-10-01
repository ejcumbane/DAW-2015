<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Section scroller template</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>


<section class="container-fluid" id="section4">
	<h2 class="text-center">SoftDevelopers....Inovando!</h2>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
      <?php echo $this->Html->link(
					$this->Html->image('bg_smartphones.jpg', array( 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
      </div>
    </div>
</section>



<footer id="footer">
  <div class="container">
    <div class="row">    
      <div class="col-xs-6 col-sm-6 col-md-3 column">          
          <h4>Informação</h4>
          <ul class="nav">
            <li><a href="about-us.html">Produtos</a></li>
            <li><a href="about-us.html">Serviços</a></li>
            <li><a href="about-us.html">Benefícios</a></li>
            <li><a href="elements.html">Desenvolvedoress</a></li>
          </ul> 
        </div>
      <div class="col-xs-6 col-md-3 column">          
          <h4>Siga_nos</h4>
          <ul class="nav">
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Google+</a></li>
            <li><a href="#">Linkedin</a></li>
          </ul> 
      </div>
      <div class="col-xs-6 col-md-3 column">          
          <h4>Contacte-nos</h4>
          <ul class="nav">
            <li><a href="#">Email</a></li>
            <li><a href="#">Sede</a></li>
            <li><a href="#">Gestão</a></li>
            <li><a href="#">Suporte</a></li>
          </ul> 
      </div>
      <div class="col-xs-6 col-md-3 column">          
          <h4>Serviços aos clientes</h4>
          <ul class="nav">
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Delivery Information</a></li>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos &amp; Condições</a></li>
          </ul> 
      </div>
    </div><!--/row-->
  </div>
</footer>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>