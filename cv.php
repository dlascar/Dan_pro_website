<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'includes/header.php' ;
		?>
		<meta name="description" content="The curriculum vitae of Prof. Daniel D. Lascar">
		<?php	
			include 'includes/header_mid.php' ;
		?>
		<title>Curriculum vitae of Prof. Daniel D. Lascar</title>
		<?php
			include 'includes/header_end.php'
		?>
	</head>

  <body>

    <!-- Fixed navbar -->
    
	<?php $page = 'cv'; include 'includes/navigation.php' ; ?>

    <!-- Begin page content -->

	<div class="container">
		<div class="row">
			<div class="col-md-3"><h1>Academic CV</h1></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
		</div>
		
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<p  style=" margin: 12px auto 6px auto; font-family: Helvetica,Arial,Sans-serif; font-style: normal; font-variant: normal; font-weight: normal; font-size: 14px; line-height: normal; font-size-adjust: none; font-stretch: normal; -x-system-font: none; display: block;">   <a title="View Academic CV on Scribd" href="https://www.scribd.com/doc/282226617/Academic-CV"  style="text-decoration: underline;" >Academic CV</a> by <a title="View Daniel Lascar's profile on Scribd" href="https://www.scribd.com/user/295582837/Daniel-Lascar"  style="text-decoration: underline;" >Daniel Lascar</a></p><iframe class="scribd_iframe_embed" src="https://www.scribd.com/embeds/282226617/content?start_page=1&view_mode=scroll&access_key=key-ughQurjdIWJxmjsfKXH3&show_recommendations=true" data-auto-height="false" data-aspect-ratio="0.7729220222793488" scrolling="no" id="doc_71265" width="100%" height="600" frameborder="0"></iframe>
			</div>
			<div class="col-md-3">
				<br><br>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Download here</h3>
					</div>
					<div class="panel-body">
						<a href="docs/Lascar_CV.docx" target="_blank">MS Word format</a> 
						<br>
						<a href="docs/Lascar_CV.pdf" target="_blank">PDF format</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
				
	<footer class="footer">
      <?php
		include 'includes/footer.php' ;
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
