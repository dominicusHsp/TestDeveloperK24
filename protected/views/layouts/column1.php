<?php $this->beginContent('//layouts/main'); ?>
<section class="container" role="main">
<article class="row">
    <div class="span12">
        <div id="content">
			<?php
			if(Yii::app()->user->getLevel()<=2)
			{
				 $this->widget('ext.bootstrap.widgets.TbNav', array(
					'type' => TbHtml::NAV_TYPE_TABS,'type'=>'tabs',
					'items'=>$this->menu,
				));
			}
		?>
            <?php echo $content; ?>
        </div><!-- content perhatiin saya gak punya nav -->
    </div>
</article>
</section> 
<?php $this->endContent(); ?>