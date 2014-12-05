<h2>Editing <span class='muted'>Wdev</span></h2>
<br>

<?php echo render('wdev/_form'); ?>
<p>
	<?php echo Html::anchor('wdev/view/'.$wdev->id, 'View'); ?> |
	<?php echo Html::anchor('wdev', 'Back'); ?></p>
