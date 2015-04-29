<?php defined('KOOWA') or die ?>

<?php $trendingHashtags = $gadgets->extract('hashtags-trending'); ?>

<div class="row">
    <?php if(count($gadgets) >= 1 ): ?>
    <div class="span2"> 
        <ul class="nav nav-pills nav-stacked streams">
            <li class="nav-header">
            <?=  @text('LIB-AN-STREAMS') ?>
            </li>    
            <?php foreach($gadgets as $index=>$gadget) : ?>
            <li data-stream="<?= $index ?>" class="<?= ($index == 'stories') ? 'active' : ''; ?>">
            	<a href="#<?= $index ?>" data-toggle="tab"><?= $gadget->title ?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <?php endif; ?>

    <div class="span6" id="container-main">
    
        <?= @helper('com:composer.template.helper.ui.composers', $composers) ?>
        
        <div class="tab-content">
            <?php foreach($gadgets as $index=>$gadget) : ?>
            <div class="tab-pane fade <?= ($index == 'stories') ? 'active in' : ''; ?>" id="<?= $index ?>">	
            	<?= @helper('ui.gadget', $gadget) ?>
            </div>
            <?php endforeach;?>
        </div>
    </div>

    <div class="span4">
    <?= @helper('ui.gadget', $trendingHashtags) ?>	
    </div>
</div>


