<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'includes/header.php' ;
		?>
		<meta name="description" content="The contact information for Daniel D. Lascar, Ph.D.">
		<?php	
			include 'includes/header_mid.php' ;
		?>
		<title>Contact information for Daniel D. Lascar, Ph.D.</title>	
		<?php
			include 'includes/header_end.php'
		?>
	</head>	

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="mailto:lascar@anl.gov">Daniel D. Lascar, Ph.D.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">About</a></li>
            <li><a href="research.php">Research</a></li>
            <li><a href="teaching.php">Teaching</a></li>
			<li><a href="cv.php">Academic CV</a></li>
			<li><a href="pubs.php">Publications</a></li>
			<li class="active"><a href="contact.php">Contact</a></li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->

	<div class="container">
		<div class="row">
			<div class="col-md-3"><h1>Please contact <br>me with questions <br>or comments</h1></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
		</div>
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3">
				Email: <a href="mailto:lascar@anl.gov">lascar@anl.gov</a>
				<br>
				Phone: 773-454-2913
				<br>
				<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
				<div id="SkypeButton_Call_daniel.lascar_1">
					<script type="text/javascript">
						Skype.ui({
						"name": "dropdown",
						"element": "SkypeButton_Call_daniel.lascar_1",
						"participants": ["daniel.lascar"],
						"imageSize": 24
						});
					</script>
				</div>
				<br>
				<script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
				<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/danieldlascar" data-format="inline" data-related="false"></script>	
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
				
	<footer class="footer">
		<?php include 'includes/footer.php' ;
		?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
