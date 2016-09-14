<div class="icsa minpadtop minpadbottom col-md-8">
	<div class="entry-content medpad">
	  <div class="iproTitle"><?php the_title(); ?></div>
	  <?php if(has_post_thumbnail()) :?><img src="<?= the_post_thumbnail_url(); ?>" style="width:100%; margin:2% 0%;"><?php endif; ?>
	  <?php the_content(); ?>
	</div>
</div>
</div></div>