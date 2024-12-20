<?php if( empty($tasks) == false) : ?>
<ul>
<?php foreach($tasks as $task): ?>
<li>tache: <?php echo $task[0]; ?>, date: <?php echo $task[1]; ?></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
