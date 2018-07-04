<h2><?php echo $page_title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('dashboard/new_review'); ?>

<label for="title">Title</label>
<input type="input" name="title" /><br />

<label for="genre">genre</label>
<input type="input" name="genre" /><br />


<label for="imdbrating">IMdb Rating</label>
<input type="input" name="imdbrating" /><br />


<label for="pukksrating">Pukks Rating</label>
<input type="input" name="pukksrating" /><br />


<label for="imdbreview">IMdb Review</label>
<textarea name="imdbreview"></textarea><br />


<label for="pukksreview">Pukks Review</label>
<textarea name="pukksreview"></textarea><br />

<input type="submit" name="submit" value="New show review" />

</form>