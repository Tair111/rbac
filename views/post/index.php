<?php if(isset($model)): ?>
    <?php foreach ($model as $item): ?>
        <div class="well">
            <h2><?=$item->title?></h2>
            <div>
                <?=$item->title?>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>