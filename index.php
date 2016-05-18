<!DOCTYPE html>
<html>
	<head>
				<link rel="stylesheet" href="styles.css" type="text/css" />
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Conscious Interactive | Art of War: Mediolanum | Web Design </title>
				<meta property="og:locale" content="en_US" />
				<meta property="og:type" content="website" />
				<meta property="og:title" content="Conscious Interactive - Art of war: mediolanum, Web design, Game design, Programming and more" />
				<meta property="og:description" content="Conscious Interactive - A student dev blog on the current development Art of War: Mediolanum, Game design, Programming and more" />
				<meta property="og:url" content="http://www.consciousinteractive.com/" />
				<meta property="og:site_name" content="Conscious Interactive" />
				<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  </head>

 	<body>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-77911661-1', 'auto');
			ga('send', 'pageview');
		</script>

			<?php
					if (file_exists('useron.txt'))
					{
						$fil = fopen('useron.txt', r);

						$dat = fread($fil, filesize('useron.txt'));

						//echo $dat+1;

						fclose($fil);

						$fil = fopen('useron.txt', w);

						fwrite($fil, $dat+1);
					}
					else
					{
						$fil = fopen('useron.txt', w);

						fwrite($fil, 1);

						//echo '1';

						fclose($fil);
					}
				?>

			<div id="container">
    	  <header>
		  		<div class="width">
     				<h1>
		  				<img style = "position:relative; top:-5px; left:-10px; width:50px; HEIGHT:50px" src="img/cilogo.png" alt = "Conscious Interactive logo left"><a href="/">Conscious Interactive</a>
		  				<img style = "position:relative; top:-5px; left:0px; width:50px; HEIGHT:50px" src="img/cilogo.png" alt = "Conscious Interactive logo right">
		  			</h1>

		  			<p>
		  	 			<!--Games consciously made, consciously played.-->
		  			</p>

	      		<nav>
	  					<ul>
        				<li class="start selected"><a href="http://www.consciousinteractive.com/index.php"><i class="fa fa-home"></i> H o m e</a></li>
								<li><a href="http://www.consciousinteractive.com/news.html"><i class="fa fa-newspaper-o"></i> N e w s / B l o g</a></li>
								<li><a href="http://www.consciousinteractive.com/art-of-war/aowIndex.php"><i class="fa fa-fort-awesome"></i> Art of War: Mediolanum</a></li>
								<!--<li><a href="projects.html"><i class="fa fa-briefcase"></i> P r o j e c t s</a></li>-->
								<li><a href="http://www.consciousinteractive.com/media.html"><i class="fa fa-film"></i> M e d i a</a></li>
								<li><a href="http://www.consciousinteractive.com/webdesign.html"><i class="fa fa-diamond"></i> W e b  D e s i g n</a></li>
								<!--<li><a href="games.html"><i class="fa fa-dashboard"></i> G a m e s</a></li>-->
								<li><a href="http://www.consciousinteractive.com/contact.html"><i class="fa fa-envelope-o"></i> C o n t a c t</a></li>
								<li><a href="http://www.consciousinteractive.com/about.html"><i class="fa fa-info-circle"></i> A b o u t</a></li>
        			</ul>
    	  		</nav>
					</div>
				</header>

    	<div id="body" class="width">
			 <section id="content" class="two-column with-right-sidebar">
		    	<h6>Announcements, News, Thoughts, Updates, etc</h6>
						<ul class="newslist">
							<li>
								<article class="expanded">
										<h2>The Good Bad and the Ugly Java Object - Mar 7</h2>
											<div class="article-info">Posted on <time datetime="2016-03-07">06 Dec</time> by <a href="#" rel="author">C Galletta</a>
											</div>
											<p>
												Hey i havent had much time with school to implemented anything major yet even though im recovering from a project deletion with no backup. Accidentaly having git delete my local repo which has set me back now 2,3 months.
					  						Starting from a build 3 months ago ive decided it would be a good time to start rewriting the achirtecture removing the GameManager class object which starting becoiming too vague and too many responsiblities.
											</p>
						  				<img class="left" src="art-of-war/img/tgbu.gif" width="512" height="512" alt="Art of war mediolanum box art"/>

											<p>
												<a href="http://www.consciousinteractive.com/blog-6-god-object.html" class="button">Read more</a>
						 					</p>
											<p>
											</p>
									</article>
							</li>

							<li>
								<article class="expanded">
									<h2>Fallout 4 and Restructuring the Core - Dec 6</h2>
									<div class="article-info">Posted on <time datetime="2015-11-06">06 Dec</time> by <a href="#" rel="author">C Galletta</a></div>
										<p>
				   						With classes just about over for me and the current release of Fallout 4, ive managed to sink a
						  				bit of time into it. Now that ive had my fallout fix. At the end of lvl 31. With a little over 3.5 full days of gameplay experienced,
						  				i cant help but have a bittersweet feeling. Ive avoided most of the story. So i wont mention it too much or at all.
					 					</p>
						  			<a class="noUnderlineLink" href="http://www.consciousinteractive.com/blog-6-fallout.html"><img class="left" src="img/fallout4.png" title="fallout 4" width="512" height="512" alt="Art of War: Mediolanum box art"/></a>

						  			<p>
											<a href="http://www.consciousinteractive.com/blog-6-fallout.html" class="button">Read more</a>
						 				</p>
										<p>
										</p>
								</article>
							</li>

							<li>
								<article class="expanded">
									<h2>Summer Time and Java Runtime</h2>
									<div class="article-info">Posted on <time datetime="2015-09-25">25 Sept</time> by <a href="#" rel="author">C Galletta</a></div>
									<p>
				   		  	Septembers been a busy month so far, editing 2,3 trailers, a failed greenlight campaign and art
				   		  	assets overhauls. It has been a very exciting experience to put something out there on the internet and recieve feedback.
				   		  	I didnt want to put it up on steam till i knew the game ran on all 3 platforms(Win,Mac,&Linux) because you do not want to say something runs on one platform and it doesnt.
							  	</p>
						  		<a class="noUnderlineLink" href="art-of-war/blog-5-update.php"><img class="left" src="art-of-war/img/aowboxart.png" width="512" height="512" alt="Art of war mediolanum box art"/></a>

						  		<p>
										<a href="http://www.consciousinteractive.com/art-of-war/blog-5-update.php" class="button">Read more</a>
						  		</p>
									<p>
									</p>
								</article>
							</li>

							<li>
								<article class="expanded">
									<h2>Long Overdue Delayed Update</h2>
							  	<div class="article-info">Posted on <time datetime="2015-04-21">20 Aug</time> by <a href="#" rel="author">C Galletta</a></div>

									<p>
						  			Wow i cannot believe its already half way through August, the time really flys when your in the thick of development. I have a alot to write about but ill try to keep it brief.
									</p>
					 				<img class="left" src="art-of-war/img/mapb4After.jpg" width="512" height="382" alt="art of war game mediolanum map b4 and After"/>
									<p>
										<a href="http://www.consciousinteractive.com/art-of-war/blog-4-update.php" class="button">Read more</a>
									</p>
									<p>
									</p>
								</article>
							</li>

							<li>
								<article class="expanded">
									<h2>Quick Update</h2>
									<div class="article-info">Posted on <time datetime="2015-04-21">21 April</time> by <a href="#" rel="author">C Galletta</a></div>
							  		this week i have added a new functional player unit into the game, the ranged Celtic archer.
							  		The ranged archer unit can attack farther than a melee unit can. However the archer unit has no armor, so their vulnerable to close melee attacks.
							  		Since archers have no armor they deal just bit more damage than the average melee units do. I will post an image below of the rough implementation.
						   				<p>
						      			<img class="center" src="art-of-war/img/archerTestAOW.gif" width="282" height="141" alt="art of war game mediolanum archerTest"/>
						   				</p>
 						   				<p>
						   					<a href="http://www.consciousinteractive.com/art-of-war/blog-3-update.php" class="button">Read more</a>
 					 						</p>
								</article>
							</li>

							<li>
								<article class="expanded">
									<h2>The Combat System </h2>
										<div class="article-info">Posted on <time datetime="2015-04-13">13 April</time> by <a href="#" rel="author">C Galletta</a></div>
									  	This week ive put some time into the combat system of Art of War. While your trying to conquer England or not, you will be engaged in combat. To capture the essance of Sun Tzu's document The Art of War(T.A.O.W.) and as a fan a of Japanese and Chinese board games like Go,
							 				ive influenced the game board to be a square grid based like Go (if you have not played Go i suggest you do!).
						 					<a href="http://www.consciousinteractive.com/art-of-war/blog-2-combat.php" class="button">Read more</a>
						  				<p></p>
						 		</article>
							</li>
		   		</ul>
		<!--<a href="#" class="button button-reversed">Comments</a> -->
	     </section>


    <aside class="sidebar big-sidebar right-sidebar">

				<h4><i class="fa fa-trophy"></i> something will go here. once i figure it out</h4>
				<hr>
        	<ul>
						<li><a href="#"><i class="fa fa-code"></i> Currently coding, writing music and doing the art</a></li>
						<!--<li><a href="#"><i class="fa fa-github"></i> My git account</a></li>-->
						<!--<li><a href="#">pokemon 3d mod</a></li>-->
						<li><a href="http://www.soundcloud.com/kidconscious"><i class="fa fa-soundcloud"></i> soundcloud - posted game tracks</a></li>
						<li><a href="http://www.twitter.com/consciousint"><i class="fa fa-twitter"></i>twitter</a></li>
					</ul>
    </aside>


		<div class="clear"></div>
     <!-- Footer -->
			<footer>
				<div class="footer-bottom">
					<div class="social-icons">

								<a href="#"><i class="fa fa-facebook fa-2x"></i></a>
								<a href="http://www.twitter.com/consciousint"><i class="fa fa-twitter fa-2x"></i></a>
								<a href="http://www.youtube.com/channel/UC9Sdi-DMaZ0kwxUb64q2n2Q"><i class="fa fa-youtube fa-2x"></i></a>
								<a href="#"><i class="fa fa-instagram fa-2x"></i></a>

				  <!--
			  	<a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
				  <a href="#"><i class="fa fa-steam fa-2x"></i></a>
			  	<a href="#"><i class="fa fa-android fa-2x"></i></a></div>-->

								<p>&copy; CI 2015. <a href="index.html">Template</a> by CJ Galletta</p>
					</div>
				</div>
			</footer>
			</div>
		</div>
	</body>
</html>
