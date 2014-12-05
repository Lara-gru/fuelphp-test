<h2>Viewing <span class='muted'>#<?php echo $wdev->id; ?></span></h2>

<p>
	<strong>Title:</strong>
	<?php echo $wdev->title; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $wdev->content; ?></p>

<?php echo Html::anchor('wdev/edit/'.$wdev->id, 'Edit'); ?> |
<?php echo Html::anchor('wdev', 'Back'); ?>