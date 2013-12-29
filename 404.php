<?php get_header(); ?>

<div id="article" class="main clearfix">
	<article id="post-404 post-error">
    <section class="featured featured-none main-wrap">
        <header class="title">
            <h1 class="title-with-search">Not found.</h1>
	            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	            <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s">
	            <input type="submit" class="search-submit" value="Search">
	          </form>
        </header>
    </section>

 </article>
 
 <section class="post-lists clearfix">
 
 	<article id="post-xxx" class="post-item main-wrap">
 		<p>It's 404. This page doesn't exist, or had been removed.</p>
		<p>Get out of here. <a href="<?php bloginfo('home') ?>">Go back</a> to home or try <a href="#" class="do-search">search</a> instead</p>
    </article>
     
 </section>
</div>

<?php get_footer(); ?>