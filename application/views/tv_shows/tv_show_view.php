<div class="card">
	<div class="card-body">
		<h3>IMdbRating</h3>
		<p><?=$show['imdbrating'];?>/10</p>
		<h3>Pukks Rating</h3>
		<p><?=$show['pukksrating'];?>/10</p>
		<h3>IMdb Review</h3>
		<p><?=$show['imdbreview'];?></p>
		<h3>Pukks Review</h3>
		<p><?=$show['pukksreview'];?></p>
		
	</div>

</div>

<div class="row">
	<?php foreach ($shows as $row):?>
		
		<div class="col-12 col-sm-4 wow zoomIn">
			<div class="card"><a href="<?= site_url('tv-shows/' . url_title($row['title'],'-',TRUE));?>">
					<div class="card-body"><h2>
							<?= $row['title'];?>
						</h2>
					</div></a>
				<div class="card-footer">
					<P>
						IMdb Rating <?=$row['imdbrating'];?>/10
					</P>
				</div>
			</div>
		</div>
		<br/>
	<?php endforeach;?>
</div>