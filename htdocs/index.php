<?php
// get last Modified date of this file
$lastMod = date ("F d Y", getlastmod());
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curtis's DWA15 Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/p1.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <header class="page-header">
        <h1>DWA15 Portfolio</h1>
      </header>
      <!-- Bootstrap two-columns, first column right -->
      <div class="row">
		<div class="content-nav">

        <figure class="text-center">
        <img src="photos/curtis-holding-macaw_sm.jpg" 
        	srcset="photos/curtis-holding-macaw_sm_2x.jpg 2x" alt="Curtis Wilcox">
        <figcaption>Curtis Wilcox</figcaption>
        </figure>
        
        <nav>
        <dl class="dl-horizontal">
        	<dt><a href="http://p1.dwa15.cognize.org">Portfolio</a></dt>
        	<dd><a href="https://github.com/extra808/dwa15-p1">Project 1 GitHub <abbr title="repository">repo</abbr></a></dd>

        	<dt><a href="https://p2.dwa15.cognize.org">xkcd Password Generator</a></dt>
        	<dd><a href="https://github.com/extra808/dwa15-p2">Project 2 GitHub <abbr title="repository">repo</abbr></a></dd>

        	<dt><a href="http://p3.dwa15.cognize.org">Developer's Best Friend</a></dt>
        	<dd><a href="https://github.com/extra808/dwa15-p3">Project 3 GitHub <abbr title="repository">repo</abbr></a></dd>

        	<dt>Final Project <abbr title="To Be Determined">TBD</abbr></dt>
        	<dd>Project 4 GitHub <abbr title="repository">repo</abbr></dd>
        </dl>
		</nav>
		</div> <!-- /col-md-4 col-md-push-8 -->
		<div class="content-prose">

        <h2>Who I am, what I do</h2>
        <p>I'm a husband, uncle, and cat owner. I like <abbr title="speculative fiction">SF</abbr> books / movies / TV, "prestige television," theater, spicy food, and <a href="http://cognize.org/gallery/index.php?/category/3">international travel</a>. I'm interested in copyright reform and the maker movement.</p>
        
        <p>I work at Harvard, I'm the <abbr title="Information Technology">IT</abbr> Manager for <a href="http://ims.fas.harvard.edu">Instructional Media Services</a> (IMS) and the manager of the <a href="http://atl.fas.harvard.edu">Adaptive Technology Lab</a> (ATL). I manage the IT staff and budget in IMS, administer departmental servers, provide support to the IMS staff, and provide IT support in <abbr title="Faculty of Arts and Sciences">FAS</abbr> classrooms. I also manage the ATL staff and budget, use my IT skills to advise on and support assistive technologies, and am involved with the work to advance Harvard's <a href="https://en.wikipedia.org/wiki/Web_accessibility">web accessibility</a>.</p>
        <h2>Why I'm taking this course</h2>
        <p>I'm taking this course to learn about and practice:</p>
        <ul>
        	<li>version control (git & GitHub)
        	<li>using backend frameworks (Laravel)
        	<li>the <a href="https://en.wikipedia.org/wiki/Model–view–controller"><abbr title="Model View Controller">MVC</abbr></a> software design pattern
        	<li> <a href="https://en.wikipedia.org/wiki/Object-relational_mapping"><abbr title="Object-relational Mapping">ORM</abbr></a> in program and database design
        </ul>
        <p>I'm also using it as an opportunity to try out front-end frameworks (<a href="http://getbootstrap.com">Bootstrap</a>), <a href="http://sass-lang.com">Sass</a>, and I'm sure other tools and ideas.</p>

        <h2>My previous programming experience</h2>
        <p>I made <a href="http://cognize.org/ccwf/">my first web site</a> in 1995. In my <abbr title="Master of Science">MS</abbr> in IT program at <a href="http://www.rit.edu"><abbr title="Rochester Institute of Technology">RIT</abbr></a>, my coursework involved using C++, HTML & CSS, shell & batch (Windows) scripting, Lingo (Macromedia Director), and Perl. I've taken a number of classes at <abbr title="Division of Continuing Education">DCE</abbr> in which I've written code in <a href="https://en.wikipedia.org/wiki/Adobe_ColdFusion">ColdFusion</a>, C (including <a href="https://www.arduino.cc/en/Tutorial/Sketch">Arduino sketches</a>), PHP, JavaScript, SQL, <a href="https://en.wikipedia.org/wiki/Scratch_(programming_language)">Scratch</a>, <a href="https://en.wikipedia.org/wiki/Processing_(programming_language)">Processing</a>, and Java. In my IT career, not a lot of my time is spent programming but has included using many of the scripting languages I've used in school, particularly Perl and PHP, plus some AppleScript and <a href="https://en.wikipedia.org/wiki/FileMaker">FileMaker</a>.</p>

        <h2>My system platforms</h2>
        <p>I'm using a Mac in this class. At home, I've always used Macs, starting with a Mac Plus, and since coming to Harvard I use a Mac for work as well. However, previously I used a PC at work and still work with and support people using PCs. I also have experience using and administering Unix-based operating systems other than OS X, primarily from the command line.</p>

		</div> <!-- /col-md-8 col-md-pull-4 -->
      </div>

	<footer class="well well-sm text-right">&copy; Curtis Wilcox <?php echo $lastMod; ?>
	</footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script async src="javascripts/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
