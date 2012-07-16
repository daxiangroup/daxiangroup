@layout('layouts/container')

@section('content')
	<!-- Section #1 / Intro -->
	<section id="first" class="story" data-speed="8" data-type="background">    	
		<div class="smashinglogo" data-type="sprite" data-offsetY="100" data-Xposition="50%" data-speed="-2"></div>		
		<article>

			{{ HTML::image('img/tutorial-title.png', 'tutorial-title', array('width'=>711, 'height'=>242)) }}
	    </article>
	</section>

	<!-- Section #2 / Background Only -->
	<section id="second" class="story" data-speed="-8" data-type="background" data-offsetY="-250">
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
	<section id="third" class="story" data-speed="6" data-type="background" data-offsetY="250">    	
		<div class="photograph" data-type="sprite" data-offsetY="1250" data-Xposition="25%" data-speed="2"></div>
    	<article>
    		<h2>The Daxian Group Method</h2>
	    	<div class="textbox">    	
				<p>We don't try to re-invent the wheel...</p>
				<p>We just make the wheel smoother and more aerodynamic. That is to say, we figure out what your needs are and build you something to suit your needs. You are part of the process, from beginning to end...</p>
				<p>What better resource to have during the development process, than the one(s) with all the ideas?</p>
		    </div>
    	</article>
	</section>	
	

	<!-- Section #4 / HTML5 Video -->
	<section id="fourth" class="story" data-speed="-8" data-type="background" data-offsetY="-500">
    	<article>
    		<h2>Really, It's Easy...</h2>
	    	<div class="textbox">    	
				<p>The last thing anyone wants, is a difficult experience.</p>
				<p>The Daxian Group strives to make the development of your online presence as painless as possible. You can consider us your friends... Who will do all the work and meet your requirements, suggest ideas you might not have thought about and won't bat an eye if the direction changes mid-stream.</p>
		    </div>
    	</article>
	</section>	

	<!-- Section #5 / Background Only -->
	<section id="fifth" class="story" data-speed="8" data-type="background">
		<article>
			<h2>Our Works</h2>
			<div>
				<p>We're proud of the work we've done. Take a look through some of our highlights, you should be impressed.</p>
			</div>
		</article>
		<div id="ding">
			<div>
				waff! this is a really long line to illustrate the scrolling sideways. this will be used for the scrolling of "our works".
			</div>
		</div>
	</section>

	<!-- Section #5 / The End-->
	<section id="theend" class="story" data-speed="8" data-type="background" data-offsetY="250">    	
    	<article>
    		<h2>Contact!</h2>
	    	<div class="textbox">
	    		<p>Want to get in touch with us?</p>
	    		<p>Fill out the contact form and we'll gladly return your inquiry, as quickly as possible.</p>
	    	</div>
	    </article>
		<div class="byebye" data-type="sprite" data-offsetY="-2000" data-Xposition="50%" data-speed="-2"></div>	
	</section>
@endsection
