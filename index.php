<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'includes/header.php' ;
		?>
		<meta name="description" content="The website of Daniel D. Lascar, Ph.D.">
		<?php	
			include 'includes/header_mid.php' ;
		?>
		<title>Website of Daniel D. Lascar, Ph.D.</title>
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
            <li class="active"><a href="index.php">About</a></li>
            <li><a href="research.php">Research</a></li>
            <li><a href="teaching.php">Teaching</a></li>
			<li><a href="cv.php">Academic CV</a></li>
			<li><a href="pubs.php">Publications</a></li>
			<li><a href="contact.php">Contact</a></li>
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
			<div class="col-md-3"><h1>Nuclear Astrophysicist</h1></div>
			<div class="col-md-3"></div>
			<div class="col-md-3">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				<img src="images/nu_loyola_logo.png" width=100% height="auto" align="middle"/>
			</div>
			<div class="col-md-3">
				<br>
				<p>I am currently an adjunct faculty member at <a href="http://www.luc.edu" target="_blank">Loyola University Chicago</a> and laboratory manager at <a href="http://www.northwestern.edu" target="_blank">Northwestern University</a> in the <a href="http://cfp.physics.northwestern.edu/" target="_blank">Center for Fundamental Physics (CFP)</a>. </p>
			</div>
			<div class="col-md-3">
				<script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
				<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/danieldlascar" data-format="inline" data-related="false"></script>	
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-3">
				<!--<img src="images/2peak.png" width="90%" height="auto" align="middle"/> -->
				<img src="images/scope_circle.png" width="90%" height="auto" align="middle"/>
			</div>
			<div class="col-md-3">
				<br><br>
				<p>I was the lead postdoctoral fellow in the <a href="https://titan.triumf.ca/" target="_blank">TITAN</a> ion trapping group at <a href="http://www.triumf.ca" target="_blank">TRIUMF</a> in Vancouver, BC. I primarily studied astrophysically important nuclear properties.</p>
			</div>
			<div class="col-md-3"><br>
			</div>
		</div>
		<br><br>
		<!--<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
			<div class="col-md-3"></div>
		</div>-->
		<div class="row">
			<div class="col-md-3">
				<img src="images/chart-r1.png" width="90%" height="auto" align="middle"/>
			</div>
			<div class="col-md-3">
				<br><br>
				<p>I have taught lectures and courses in Nuclear Astrophysics, Mass Spectrometry, Ion Trapping, Detector Physics, Electricity and Magnetism, Mechanics, and Waves and Optics</p>
			</div>
			<div class="col-md-3"><br>
			</div>
		</div>
		<br><br>
		<div class ="row">
			<div class="col-md-3">
				<img src="images/logos1.png" width="90%" height="auto" align="middle"/>
			</div>
			<div class="col-md-3">
				<br><br>
				<p>I performed my Ph.D. work at <a href="http://www.physics.northwestern.edu" target="_blank">Northwestern University</a> and <a href="http://www.anl.gov" target="_blank">Argonne National Laboratory</a> making high-precision mass measurements with the <a href="https://en.wikipedia.org/wiki/Canadian_Penning_Trap_Mass_Spectrometer" target="_blank">CPT mass spectrometer</a>.</p>
			</div>
			<div class="col-md-3"><br>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-md-3">
				<img src="images/2peak.png" width="90%" height="auto" align="middle"/>
			</div>
			<div class="col-md-3">
				<br><br>
				<p>My career goals are to secure a joint appointment at a university and a national laboratory so that I can create and manage experimental efforts while being able to teach.</p>
			</div>
			<div class="col-md-3"><br>
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
