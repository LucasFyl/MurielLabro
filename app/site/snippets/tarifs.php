<section id="tarifs">
	<p class="numbr">04</p>
 	<h3><?php echo $data->title()->html() ?></h3>
	<div class="cat-left">
		<!-- foreach category -->
		<ul class="tabs-link">
			<?php foreach(page('tarifs')->children()->visible() as $tarifcat): ?>
			<li class="<?php echo $tarifcat->title()->html() ?>"><?php echo $tarifcat->title() ?></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="prices tabs-content">
		<!-- foreach price -->
		<?php foreach(page('tarifs')->children()->visible() as $tarifcat): ?>
		<div class="<?php echo $tarifcat->title()->html() ?> tab" style="margin-bottom:5rem;">
			<ul>
			<?php foreach($tarifcat->children()->visible() as $tarif): ?>
				<li><p class="italic"><?php echo $tarif->title() ?></p>
				<?php foreach($tarif->children()->visible() as $price): ?>
					<p>
						<span><?php echo $price->title() ?></span>
						<span><?php echo $price->price2() ?></span>
						<span><?php echo $price->price1() ?></span>
						<!-- switch tarif 1 et 2 pour float right -->
					</p>
				<?php endforeach ?>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
		<?php endforeach ?>
	</div>
</section>