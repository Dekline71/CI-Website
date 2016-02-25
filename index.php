<!doctype html>
<html>
	  <head>
	  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>Conscious Interactive - </title>
			<link rel="stylesheet" href="styles.css" type="text/css" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<meta property="og:locale" content="en_US" />
			<meta property="og:type" content="website" />
			<meta property="og:title" content="Conscious Interactive - Art of war: mediolanum, Game design, Programming and more" />
			<meta property="og:description" content="Conscious Interactive - A student dev blog on the current development Art of War: Mediolanum, Game design, Programming and more" />
			<meta property="og:url" content="http://www.consciousinteractive.com/" />
			<meta property="og:site_name" content="Conscious Interactive" />
      </head>

	 	 <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

   	<body>

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
		  	  <img style = "position:relative; top:-5px; left:-10px; width:50px; HEIGHT:50px" src="img/cilogo.png" alt = ""><a href="/">Conscious Interactive</a>
		  	  <img style = "position:relative; top:-5px; left:0px; width:50px; HEIGHT:50px" src="img/cilogo.png" alt = "">
		  </h1>

		  <p>
		  	 <!--Games consciously made, consciously played.-->
		  </p>

	      <nav>
	  			<ul>
        			<li class="start selected"><a href="index.php"><i class="fa fa-home"></i> H o m e</a></li>

							<li><a href="news.html"><i class="fa fa-newspaper-o"></i> N e w s / B l o g</a></li>

							<li><a href="art-of-war/aowIndex.php"><i class="fa fa-fort-awesome"></i> Art of War: Mediolanum</a></li>

							<li><a href="projects.html"><i class="fa fa-briefcase"></i> P r o j e c t s</a></li>

							<li><a href="media.html"><i class="fa fa-film"></i> M e d i a</a></li>

							<li><a href="contact.html"><i class="fa fa-envelope-o"></i> C o n t a c t</a></li>

							<li><a href="about.html"><i class="fa fa-info-circle"></i> A b o u t</a></li>
        		</ul>

    	  </nav>

       	</div>
    	</header>

    	<div id="body" class="width">

			 <section id="content" class="two-column with-right-sidebar">

	    	 <article>

		    	<h6>Announcements, News, Thoughts, Updates, etc</h6>

					<ul class="newslist">
					<li>
					<p>
					<article class="expanded">
						<h2>Fallout 4 and restructuring the core - Dec 6</h2>
						<div class="article-info">Posted on <time datetime="2015-11-06">06 Dec</time> by <a href="#" rel="author">C Galletta</a></div>

				   		With classes just about over for me and the current release of Fallout 4, ive managed to sink a
						  bit of time into it. Now that ive had my fallout fix. At the end of lvl 31. With a little over 3.5 full days of gameplay experienced,
						  i cant help but have a bittersweet feeling. Ive avoided most of the story. So i wont mention it too much or at all.
					</p>
						  <img class="left" src="img/fallout4.png" title="fallout 4" width="512" height="512" alt="Art of war mediolanum box art"/>


						  <p>
										<a href="blog-6-fallout.html" class="button" alt="Read More">Read more</a>
						 </p>
										<p>
										</p>
									</article>
					</li>

					<li>
						<p>
						<article class="expanded">
							<h2>Summer Time and Java Runtime</h2>
							<div class="article-info">Posted on <time datetime="2015-09-25">25 Sept</time> by <a href="#" rel="author">C Galletta</a></div>
								<p>
				   		  Septembers been a busy month so far, editing 2,3 trailers, a failed greenlight campaign and art
				   		  assets overhauls. It has been a very exciting experience to put something out there on the internet and recieve feedback.
				   		  I didnt want to put it up on steam till i knew the game ran on all 3 platforms(Win,Mac,&Linux).
							  </p>
						  	<img class="left" src="art-of-war/img/aowboxArt.png" width="512" height="512" alt="Art of war mediolanum box art"/>

						  	<p>
									<a href="art-of-war/blog-5-update.php" class="button" alt="Read More">Read more</a>
						  	</p>
								<p>
								</p>
							</article>
						</p>
					</li>


					<li>
						<p>
							<article class="expanded">
								<h2>Long Overdue Delayed Update</h2>
								<div class="article-info">Posted on <time datetime="2015-04-21">20 Aug</time> by <a href="#" rel="author">C Galletta</a></div>

								<p>
						  		Wow i cannot believe its already half way through August, the time really flys when your in the thick of development. I have a alot to write about but ill try to keep it brief.
								</p>

					 			<img class="left" src="art-of-war/img/mapb4After.jpg" width="800" height="382" alt="art of war game mediolanum map b4 and After"/>
								<p>
										<a href="art-of-war/blog-4-update.php" class="button" alt="Read More">Read more</a>
								</p>
								<p>
								</p>
							</article>
						</p>
					</li>

					<li>
						<p>
							<article class="expanded">
								<h2>Quick Update</h2>
									<div class="article-info">Posted on <time datetime="2015-04-21">21 April</time> by <a href="#" rel="author">C Galletta</a></div>
							  	this week i have added a new functional player unit into the game, the ranged Celtic archer.
							  	The ranged archer unit can attack farther than a melee unit can. However the archer unit has no armor, so their vulnerable to close melee attacks.
							  	Since archers have no armor they deal just bit more damage than the average melee units do. I will post an image below of the rough implementation.
						   		<p>
						      	<img class="center" src="aow/img/archerTestAOW.gif" width="282" height="141" alt="art of war game mediolanum archerTest"/>
						   		</p>
 						   		<p>
						   			<a href="aow/blog-3-update.php" class="button" alt="Read More">Read more</a>
 					 				</p>
							</article>
						</p>
					</li>

					<li>
						<p>
							<article class="expanded">
								<h2>The Combat System </h2>
									<div class="article-info">Posted on <time datetime="2015-04-13">13 April</time> by <a href="#" rel="author">C Galletta</a></div>
									  This week ive put some time into the combat system of Art of War. While your trying to conquer England or not, you will be engaged in combat. To capture the essance of Sun Tzu's document The Art of War(T.A.O.W.) and as a fan a of Japanese and Chinese board games like Go,
							 			ive influenced the game board to be a square grid based like Go (if you have not played Go i suggest you do!).
						</p>
						 <a href="aow/blog-2-combat.php" class="button" alt="Read More">Read more</a>
						  <p></p>
						 </article>
					</li>

					<li>
						<p>
							<article class="expanded">

											<h2>WTF is art of war? </h2>
								<div class="article-info">Posted on <time datetime="2015-04-10">10 April</time> by <a href="#" rel="author">C Galletta</a></div>

	                   <p>			Art of War is a turn based strategy game i have been developing for the past couple months based on an over 2,000 year old ancient Chinese military document titled, The Art of War.
								Being facinated by history my whole life. I wanted to make a game that puts the player in a position of power during a specific time in history.

								With my recent big interest in english history, ive given control to the player over a small bronze age celtic tribe in England. Crucial economic and political decisions as well

								as scientific/techological advancement choices will be made that shape your rule, whether you focus more on military, economics, or agriculture.</p>

									 <a href="art-of-war/blog-1-wtf.php" class="button" alt="Read More">Read more</a>
								 <p></p>
								 <!--<a href="#" class="view-all-button" alt="View All">V i e w  A l l</a>-->
					</li>
				</article>


			</ul>



		<!--<a href="#" class="button button-reversed">Comments</a> -->

		</article>

		<article class="expanded">

            <h2>Buy unbranded</h2>
			<div class="article-info">Posted on <time datetime="2015-05-14">14 May</time> by <a href="#" rel="author">C Galletta</a></div>


            <p>Purchasing a template license for 8.00 GBP (at time of writing around 12 USD) gives you the right to remove any branding including links, logos and source tags relating to ZyPOP. As well as waiving the attribution requirement, your payment will also help us provide continued support for users as well as creating new web templates. Find out more about how to buy at the licensing page on our website which can be accessed at <a href="http://zypopwebtemplates.com/licensing" title="template license">http://zypopwebtemplates.com/licensing</a></p>

			<h3>Lorem lipsum</h3>

			<p>Morbi fermentum condimentum felis, commodo vestibulum sem mattis sed. Aliquam magna ante, mollis vitae tincidunt in, malesuada vitae turpis. Sed aliquam libero ut velit bibendum consectetur. Quisque sagittis, est in laoreet semper, enim dui consequat felis, faucibus ornare urna velit nec leo. Maecenas condimentum velit vitae est lobortis fermentum. In tristique sem vitae metus ornare luctus tempus nisl volutpat. Integer et est id nisi tempus pharetra sagittis et libero.</p>

			<a href="#" class="button">Read more</a>
			<a href="#" class="button button-reversed">Comments</a>

		</article>


        </section>

         <aside class="sidebar big-sidebar right-sidebar">

           <!--    <ul>
               <li>
                    <h4>Blocklist</h4>
                    <ul class="blocklist">
                        <li><a class="selected" href="index.html">Home Page</a></li>
                        <li><a href="examples.html">Style Examples</a></li>
                        <li><a href="three-column.html">Three column layout example</a></li>
                        <li><a href="#">Sed aliquam libero ut velit bibendum</a></li>
                        <li><a href="#">Maecenas condimentum velit vitae</a></li>
                    </ul>
                   </li>

                <li>
					<h4>News</h4>
					<ul class="newslist">
					<li>
						<p><span class="newslist-date">Jul 21</span>
			            		 Quisque hendrerit lorem sit amet dui viverra dictum. Phasellus imperdiet magna sit amet arcu tristique ultricies ut in dui.</p>
								 			<a href="#" class="button">Read more</a>

					</li>

					<li>
						<p><span class="newslist-date">May 09</span>
			                   Mauris et felis semper, congue dui ac, iaculis ipsum. Fusce non rhoncus risus, quis luctus nisl. Donec vitae velit tincidunt, tincidunt felis eu, suscipit nibh. </p>
 							   <a href="#" class="button">Read more</a>

					</li>
			</ul>

			</li>
			-->

            <li>
				<h4><i class="fa fa-trophy"></i> something will go here. once i figure it out</h4>
            	<ul>
					<li><a href="#"><i class="fa fa-code"></i> Currently coding, writing music and doing the art</a></li>
					<!--<li><a href="#"><i class="fa fa-github"></i> My git account</a></li>-->
					<!--<li><a href="#">pokemon 3d mod</a></li>-->
					<li><a href="http://www.soundcloud.com/kidconscious"><i class="fa fa-soundcloud"></i> soundcloud - posted game tracks</a></li>
				</ul>
            </li>

            </ul>

        </aside>
    	<div class="clear"></div>
    	</div>

    	<footer>

				<div class="footer-bottom">
				<div class="social-icons">

				<a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="http://www.twitter.com/consciousint"><i class="fa fa-twitter fa-2x"></i></a>
			    <a href="http://www.youtube.com/channel/UC9Sdi-DMaZ0kwxUb64q2n2Q"><i class="fa fa-youtube fa-2x"></i></a>
				<!--<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
				<a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
				<a href="#"><i class="fa fa-steam fa-2x"></i></a>
				<a href="#"><i class="fa fa-android fa-2x"></i></a></div>-->

                <p>&copy; CI 2015. <a href="index.html">Template</a> by CJ Galletta</p>

    	</footer>

	</div>
	</div>

	</body>
</html>
