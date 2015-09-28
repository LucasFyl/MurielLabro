<section id="stylists">
	<p class="numbr">02</p>
 	<h3><?php echo $data->title()->html() ?></h3>
 	<p><?php echo $data->text()->kirbytext() ?></p>

 	<section class="stylists">
    	<?php foreach(page('stylists')->children()->visible() as $s): ?>

 		<div class="stylist">
	 		<?php if($img = $s->images()->find('id.jpg') ): ?>
	        <img src="<?php echo $img->url() ?>" alt="<?php echo $s->title() ?>">
	        <?php endif ?>
	        <div class="overlay">
	        	<h4><?php echo $s->title()->html() ?></h4>
	        	<h5><?php echo $s->role()->html() ?></h5>
	        	<?php echo $s->text()->kirbytext() ?>
	        </div>
 		</div>
 	<?php endforeach ?>
 		<div class="recruit">
 			<div>
 				<div>
 					<p>Vous avez envie de rejoindre notre équipe ?</p>
		 			<div class="asset-wave white"></div>
		 			<a href="mailto:muriellabro@gmail.com" class="big-btn white">contactez nous</a>
 				</div>
 			</div>
 		</div>
 	</section>
</section>