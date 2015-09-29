<section id="gallery">
	<div class="heading">
		<p class="numbr">03</p>
		<h3><?php echo $data->title()->html() ?></h3>	
	</div>

	<section class="slider">
		<div class="outer-wrap">
			<div id="slider">
				<a href="#" class="control_next"></a>
				<a href="#" class="control_prev"></a>
				<ul>
					<?php foreach($data->images()->sortBy('sort', 'asc') as $slide): ?>
					<li>
						<img src="<?php echo $slide->url() ?>" alt="<?php echo $slide->title()->html() ?>">
					</li>
					<?php endforeach ?>
				</ul>  
			</div>
		</div>
	</section>
</section>