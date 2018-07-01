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