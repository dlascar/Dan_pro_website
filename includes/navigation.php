<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="mailto:daniel.lascar@northwestern.edu">Daniel D. Lascar, Ph.D.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($page=='home'){echo 'active';} ?>"><a href="index.php">About</a></li>
            <li class="<?php if($page=='research'){echo 'active';} ?>"><a href="research.php">Research</a></li>
            <li class="<?php if($page=='teaching'){echo 'active';} ?>"><a href="teaching.php">Teaching</a></li>
			<li class="<?php if($page=='cv'){echo 'active';} ?>"><a href="cv.php">Academic CV</a></li>
			<li class="<?php if($page=='pubs'){echo 'active';} ?>"><a href="pubs.php">Publications</a></li>
			<li class="<?php if($page=='contact'){echo 'active';} ?>"><a href="contact.php">Contact</a></li>
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