<!DOCTYPE html >
  <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
      <link rel="stylesheet" href="default.css?v=1.1" />
      <link rel="icon" type="image/ico" href="favicon.ico" >
      <title>Conscious Interactive</title>
    </head>

    <body>

      <div class="container">

      <div class="gfx"><span></span></div>

      <div class="top">

      <div class="navigation"> <a href="/index.php" id="selected">home</a> <a href="/blog.php">blog</a> <a href="/contact.php">contact info</a> <a href="/media.php">image gallery</a> <a href="/about.php">about</a> </div>

      <div class="pattern"><span></span></div>

      <div class="header">

      <h1>Art of War</h1>

      <p>Blog</p>

      </div>

      <div class="pattern"><span></span></div>

      </div>

      <div class="content">

      <div class="spacer"></div>

	    <div class="item">

      <div class="title"> The Combat </div>

      <div class="metadata">April 13, 2015 by Jake Galletta </div>

      <div class="body">

	    <img class="left" src="img/aowGridSys.gif" width="235" height="211" alt=" art of war game mediolanum grid sysyem"/>

      <p> Hello fellow lords and cheiftans,</p>

		  <p>
        This week ive put some time into the combat system of Art of War. While your trying to conquer England or not, you will be engaged in combat. To capture the essance of Sun Tzu's document The Art of War(T.A.O.W.) and as a fan a of Japanese and Chinese board games like Go,
		      ive influenced the game board to be a square grid based like Go (if you have not played Go i suggest you do!). Anyways enough about Go, in the adjacent gif is a ingame demonstration of the the combat/unit movement grid. </p>
		        Its simple and unique. I find unit movement along the grid edge to be more aesthetically pleasing than a pure sqr tile or hex grid.
		          Simple because a sqr edged grid is easier to communicate unit placement and strategic formations. I also find the normal tile/hex movement map exhausted by other turn based strategy games. Since eastern and modern military strategy is highly based on T.A.O.W.,
		            it makes the most sense to make it grid based on the eastern Go strategy, unlike the western chess mindset like most turn strategy games tend to lean towards. Im rather interested in exploring the eastern Go like mindset.
		              However lets move on to the actual combat system. Most combat is engaged between two or more adjecent units, specifically from left, right, up, and down. I wont go into full detail in this post since this is stil a work in progress, but i will explain how damage is calculated, the different types of units and how their represented.



      <h1> Let me kill stuff dammit!</h1>

			<img class="left" src="img/aowCombatSys.gif" width="321" height="241" alt="art of war Combat System"/>

			<h1> Unit Types</h1>

			<p>
         The different types of units can easily be broken down into 3 types based on how they engage combat, Melee, Ranged, and Hybrid. Melee units i.e. spearmen, swordsmen can only attack other adjacent enemy units. Logical Right?.
						  Next is Ranged i.e. archers, crossbowmen, javelin/axe throwers, these units engage combat just like Melee units except they have an attack range greater than 1. These units are relatively easy to produce but are vulerable to close melee attack because most ranged units are not protected by armor unless you have invested in a special perk in the tech/perk "tree"(im using that term loosly).
						  Then theres Hybrid units, these units combine both the Melee and Ranged in that they can attack up close and far away, however these are some of the expensive units to produce but it doesnt mean their invincible.
		  </p>

		  <h1> How is Damage Dealt?</h1>

			<p>Im currently balancing and working on this, so some things may be subject to change as in getting more detailed and complicated. Combat is engaged when the player is attacked by an adjacent enemy or when the plyr selects their unit and drags the unit towards their combat targets position. Once combat is engaged, damage is calculated. Damage is calculated by computating the weapon
					 attack rating by a random number to simulate defence/misses and subject that resulting attack against the targets armor rating. This simply achieves an effictive simulation of a weapon against different classes of armor.
			</p>

      <div class="spacer"></div>

	    <div class="item">

	    <div class="body">

      <div class="spacer"></div>

	    <div class="item">

      <img class="left" src="img/aowCombatSys2.gif" width="255" height="223" alt="art of war mediolanum Combat Sys 2"/>

	    <div class="item">

      <div class="spacer"></div>

	    <div class="body">

			<p>Ill leave it at that for now. In my next post i will expand further on the combat system, specifc units and other things. </p>

      <div class="item">

      <div class="body">

      <div class="spacer"></div>

      <div class="item">

      </div>

    </div>

  </body>

</html>
