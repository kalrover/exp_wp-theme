<?php get_header(); ?>
<?php if (!have_posts()): ?>
	<h1>Not Found</h1>
	<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post</p>
<?php endif;?>
<?php while (have_posts()): the_post(); ?>
			<div class="post">
				<h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
				<div class="post-details">
					<div class="post-details-left">
						Posted on <strong><?php the_time('F j, Y');?></strong> by <span class="author"><?php the_author();?></span> under <span class="author"><a href="http://www.danwalker.com/themes/blindfaith/?cat=1" title="View all posts in Uncategorized" rel="category"><?php the_category(', ');?></a></span>
						</div>
						<div class="post-details-right">
						<?php edit_post_link('Edit', '<span class="comment-count">&nbsp;&nbsp;', '</span>');?>
						<span class="comment-count"><?php comments_popup_link('Leave a comment', '1 Comment', '% Comments');?></span>
					</div>
				</div>
	
				<p>
					<?php
					 if (is_archive() || is_search) the_excerpt();
					 else the_content('Read More');
					?>
				<p> <a href="#" class="more-link">Read More</a></p>
		
				<div class="dots"></div>
			</div><!-- post -->

<?php endwhile; ?>
<?php get_footer(); ?>