<?php

function template_skill($name, $value, $max) { 
	?><span class="hover-spin label label-primary"><i class="fa fa-spinner"></i> <?=$name?></span><?php
}

function template_facebook($video) {
?>
	<div class="fb-video" data-href="<?=$video?>" data-show-text="false">
		<div class="fb-xfbml-parse-ignore">
		</div>
	</div>
	<br>
<?php
}

function template_html5($video) {
?>
		<video style="width:100%" controls>
			<source src="/video/<?=$video?>" type="video/mp4">
		</video>
	<br><br>
<?php
}

function template_test_html5($video) {
?>
		<video controls>
			<source src="/video/<?=$video?>" type="video/mp4">
		</video>
	<br>
<?php
}

function template_youtube($video) { 
	?><!--youtube template --><div class="video-wrapper"><iframe src="https://www.youtube.com/embed/<?=$video?>" frameborder="0" allowfullscreen></iframe></div><br><?php 
}

function template_panel_start($name, $title) {
	$title = isset($title) ? $title : $name;
?>	<!-- <?=$name?> template panel start -->
	<a id="<?=$name?>"></a>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title"><?=$title?></h1>
		</div>
		<div class="panel-body">
<?php 
}		

function template_panel_end() {
?>		</div> <!-- panel-body -->
	</div> <!-- panel -->
<?php
}
