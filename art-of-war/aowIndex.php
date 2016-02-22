<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
		<!--//<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>-->
		<link rel="stylesheet" href="default.css?v=1.5">
		<link rel="icon" type="image/ico" href="favicon.ico" >
		<title>Conscious Interactive</title>
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Conscious Interactive - Art of War: mediolanum, Game design, and Programming blog" />
		<meta property="og:description" content="Conscious Interactive - A student dev blog on the current development Art of War: Mediolanum, Game design, Programming and more" />
		<meta property="og:url" content="http://www.consciousinteractive.com/art-of-war/aowIndex.php" />
		<meta property="og:site_name" content="Conscious Interactive" />
</head>

	<body>

		<?php

		if (file_exists('../aowUseron.txt'))
		{

			$fil = fopen('../aowUseron.txt', r);

			$dat = fread($fil, filesize('../aowUseron.txt'));

			//echo $dat+1;

			fclose($fil);

			$fil = fopen('../aowUseron.txt', w);

			fwrite($fil, $dat+1);

		}
		else
		{

			$fil = fopen('../aowUseron.txt', w);

			fwrite($fil, 1);

			//echo '1';

			fclose($fil);

	  }
		?>

  <div class="container">

  	   <div class="gfx"><span></span></div>

  	   <div class="top">

       <div class="navigation">
				 <a href="index.php">Home</a>
				 <a href="#" id="selected">Art of War: Mediolanum</a>
				 <a href="../art-of-war/blog-index.html">Blog</a>
				 <a href="../contact.html">Contact Info</a>
				 <a href="../about.html">About</a>
			 </div>

       <div class="pattern"><span></span></div>

       <div class="header">

     	  	<h1>Art of War: Mediolanum</h1>

    			<p>Grand Turn Based Strategy </p>

	   	 </div>

      <div class="pattern"><span></span></div>

  </div>



  <div class="content">

    <div class="spacer"></div>

    <div class="item">

		<blockquote>

          <p>For any army or faction, the art of war is of vital importance to the State.</p>

		<p></blockquote>



        <img class="center" src="img/map.jpg" width="760" height="760" alt="sample image"/>

    <!-- // <div class="title">What the hell is Art of War?</div>

     // <div class="metadata">April, 2015 by Jake Galletta </div>

	-->

      <div class="body">

        <p>Have you ever wanted to manage a tribe or small kingdom of your own?. To feel the paranoia of

		your enemies at your doorstep, the eagerness and dread of your next moves? The knife and sharp tonque of diplomacy?.

		Then Art of War is the game for you. Art of war is a strategy game based on an over 2,000 year old ancient Chinese military document titled, The Art of War.

		Set in Bronze Age England, you will make crucial economic and political decisions as well as scientific/techological advancements

		that will shape your rule. Will you be fit to lead your people and persevere through 3,000 years of invasions

		from the disciplined Roman legions, the maurading Viking hordes and the Normans? Can you master

		the art of war and carry your faction to survive what the coming ages bring? or be left in the ashes of history...</p>



		<p>Interesting? then continue to follow my blog and join me on the journey of making this game a reality.</p>

      </div>

    </div>

    <div class="divider"><span></span></div>

    <div class="item">

	<!--

      <div class="title">The Celts, who were they?</div>

      <div class="metadata">Jun 11, 2015</div>

      <div class="body">

        <p>The Celts were a civilization that lived in modern day Europe(England, France , Netherlands)...., laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi.</p>

        <h2>Society</h2>

        <p>Hello and welcome to my development blof for Art of War. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo</p>

        <h2>Non Euismod Nulla</h2>

        <p>Dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est. Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus. Fusce eleifend, dui ut posuere auctor, justo elit posuere sapien, at blandit enim quam fringilla mi.</p>

      </div>

    </div>-->





	<!--

    <div class="divider"><span></span></div>

    <div class="item">

      <div class="title">Donec dictum</div>

      <div class="metadata">Jun 6, 2015</div>

      <div class="body">

        <p>This is a development blog. <a href="#">Nullam</a> posuere tristique tortor.</p>

        <h1>Tristique</h1>

        <ul>

          <li>Tristique</li>

          <li>Aenean</li>

          <li>Pretium</li>

        </ul>

        <p>More nonsense <a href="#">can go here</a> A turn based strategy.</p>

      </div>

    </div>

    <div class="divider"><span></span></div>

    <div class="item">

      <div class="title">Ultrices</div>

      <div class="metadata">April 10, 2015</div>

      <div class="body">

        <p>Integer porta. Fusce nibh. Curabitur pellentesque, lectus at <a href="#">volutpat interdum</a>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque a nibh quis nunc volutpat aliquam</p>

        <blockquote>

          <p>A box without thines, key or lid, Yet a golden treasure inside is hid.</p>

        </blockquote>

        <p>Sem justo placerat elit, eget feugiat est leo tempor quam. Ut quis neque convallis magna consequat molestie. Nullam semper massa eget ligula. Fusce accumsan enim et arcu. Duis sagittis libero at lacus. Suspendisse lacinia nulla eget urna.</p>

        -->









		<blockquote>

		        <p>It is a matter of life and death, a road to either safety or ruin that is governed by Five constant factors. Earth, Heaven, Leadership, Method and discipline, and the Moral Law.</p>

		</blockquote>







  <div class="footer">Follow Conscious Interactive

	  <p><a href="https://twitter.com/ConsciousInt" class="twitter-follow-button" data-show-count="false">Follow @ConsciousInt_CJ</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>



	  <!--<a href="twiiter.com/ConsciousInt_CJ" id="selected">twitter</a>



 </div>

</div>

</body>

</html>
