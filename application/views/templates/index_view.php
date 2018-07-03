<div class="row">
    <?php foreach ($shows as $row):?>
    
       <div class="col-12 col-sm-4 wow zoomIn py-2">
<div class="card"><a href="<?= site_url('tv-shows/' . url_title($row['title'],'-',TRUE));?>">
<div class="card-body"><h4>
<?= $row['title'];?>
    </h4> </a><P>
        IMdb Rating <?=$row['imdbrating'];?>/10
    </P>
</div>



</div>
        </div>
<br/>
<?php endforeach;?>
</div>
