<?php snippet('header') ?>

	<div class="main">

		<section id="landing">
			<?php snippet('nav') ?>

			<div class="vertical-center">
				<div>
					<div class="brand">
						<img src="<?php echo url('assets/images/asset-logo-white.png') ?>" alt="Muriel Labro - Salon de coiffure et esthétique" />
						<h1>Muriel Labro</h1>
						<h2>Salon de coiffure & esthétique</h2>
					</div>
					<div class="asset-wave white"></div>
					<h3>Réservez votre coupe de cheveux avec votre coiffeur</h3>
				</div>
			</div>
			
		</section>


		<?php foreach($pages->visible() as $section): ?>
			<h1><?php $section->uid(); ?></h1>
		<?php snippet($section->uid(), array('data' => $section)) ?>
		<?php endforeach ?>
		
		<?php snippet('footer') ?>

