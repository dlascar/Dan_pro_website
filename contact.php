<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'includes/header.php' ;
		?>
		<meta name="description" content="The contact information for Prof. Daniel D. Lascar">
		<?php	
			include 'includes/header_mid.php' ;
		?>
		<title>Contact information for Prof. Daniel D. Lascar</title>	
		<?php
			include 'includes/header_end.php'
		?>
	</head>	

  <body>

    <!-- Fixed navbar -->
	
	<?php $page = 'contact'; include 'includes/navigation.php' ; ?>

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
				Email: <a href="mailto:daniel.lascar@northwestern.edu">daniel.lascar@northwestern.edu</a>
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
