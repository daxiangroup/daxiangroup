@layout('layouts/container')

@section('content')
	<div id="site-navigation" class="tabbable tabs-left">
	  <ul class="nav nav-tabs">
	    <li><a href="#front">Front</a></li>
	    <li><a href="#lowdown">Lowdown</a></li>
	    <li><a href="#method">Method</a></li>
	    <li><a href="#really">Really</a></li>
	    <li><a href="#works">Works</a></li>
	    <li><a href="#contact">Contact</a></li>
	  </ul>
	</div>

	<!-- Section #1 / Intro -->
	<section id="front" class="story scrollable vertical" data-stellar-background-ratio="0.1">
		<div class="smashinglogo" data-stellar-background-ratio="-1" data-stellar-horizontal-offset="50%" data-stellar-vertical-offset="100">
		</div>
		<!--<div class="smashinglogo" data-stellar-background-ratio="-1"></div>-->
		<article>

			{{ HTML::image('img/tutorial-title.png', 'tutorial-title', array('width'=>711, 'height'=>242)) }}
	    </article>
	</section>

	<!-- Section #2 / Background Only -->
	<section id="lowdown" class="story" data-stellar-background-ratio="-0.1" data-stellar-horizontal-offset="-2000" data-stellar-vertical-offset="-3000">
		<article>
			<h2>The Lowdown</h2>
			<div class="textbox">
				<p>We are a web development firm.</p>
				<p>That encompasses everything from a simple layout to a complex, backend system. Whatever your hurdle might be, The Daxian Group can provide you with a solution that will make you smile.</p>
				<p>You can take comfort knowing that the product you describe, is exactly what you're going to get at the end of the process. Chances are, it's going to be better than what you expected. That's not something we try to do for our customers, it's something that just happens.</p>
			</div>
		</article>
	</section>
	
	<!-- Section #3 / Photos -->
	<section id="method" class="story" data-stellar-background-ratio="0.3" data-stellar-horizontal-offset="2000" data-stellar-vertical-offset="920">    	
		<div class="photograph" data-stellar-background-ratio="2" data-stellar-vertical-offset="-170" data-stellar-horizontal-offset="-120"></div>
    	<article>
    		<h2>The Daxian Group Method</h2>
	    	<div class="textbox">    	
				<p>We don't try to re-invent the wheel...</p>
				<p>We just make the wheel smoother and reduce the road noise. That is to say, we figure out what your needs are and build you something to suit those needs. You are part of the process, from beginning to end...</p>
				<p>What better resource to have during the development process, than the source with all the ideas?</p>
		    </div>
    	</article>
	</section>	
	

	<!-- Section #4 / HTML5 Video -->
	<section id="really" class="story" data-stellar-background-ratio="-0.3" data-stellar-horizontal-offset="-500" data-stellar-vertical-offset="-920">
    	<article>
    		<h2>Really, It's Easy...</h2>
	    	<div class="textbox">    	
				<p>The last thing anyone wants, is a difficult experience.</p>
				<p>The Daxian Group strives to make the development of your online presence as painless as possible. You can consider us your friends... Who will do all the work and meet your requirements, suggest ideas you might not have thought about and won't bat an eye if the direction changes mid-stream.</p>
		    </div>
    	</article>
	</section>	

	<!-- Section #5 / Background Only -->
	<section id="works" class="story" data-stellar-background-ratio="0.5" data-stellar-horizontal-offset="500" data-stellar-vertical-offset="500">
		<article>
			<h2>Our Works</h2>
			<div>
				<p>We're proud of the work we've done. Take a look through some of our highlights, we think you'll be impressed.</p>
			</div>
		</article>
		<div id="work-container">
			<div class="wrapper-outer">
				<div class="wrapper-inner">

					<div class="site-box">
						<div class="screenshot"></div>
						<div class="description">
							My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?
						</div>
					</div>

					<div class="site-box">
						<div class="screenshot"></div>
						<div class="description">
							My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?
						</div>
					</div>

					<div class="site-box">
						<div class="screenshot"></div>
						<div class="description">
							My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?
						</div>
					</div>

					<div class="site-box">adf</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section #5 / The End-->
	<section id="contact" class="story" data-speed="8" data-type="background" data-offsetY="250">    	
    	<article>
    		<h2>Contact!</h2>
	    	<div class="textbox">
	    		<p>Want to get in touch with us?</p>
	    		<p>Fill out the contact form and we'll gladly return your inquiry, as quickly as possible.</p>
	    	</div>
	    </article>
	    @include('home.contact')
		<div class="byebye" data-type="sprite" data-offsetY="-2000" data-Xposition="50%" data-speed="-2"></div>	
	</section>
@endsection
