<?php snippet('header') ?>

	<div class="main">
		<?php foreach($pages->visible() as $section): ?>
			<h1><?php $section->uid(); ?></h1>
		<?php snippet($section->uid(), array('data' => $section)) ?>
		<?php endforeach ?>
	</div>

<?php snippet('footer') ?>