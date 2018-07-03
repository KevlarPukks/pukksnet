<div class="card rgba-grey-slight">
	<div class="card-body text-center">
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

<?php $this->load->view('tv_shows/index_view');