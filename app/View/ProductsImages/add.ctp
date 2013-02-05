<div class="page-content">
	<?php $this->Html->addCrumb('Gallery Images', '/products_images');
		  $this->Html->addCrumb('Add Image', '/products_images/add');?>
	<?php echo $this->Form->create('ProductsImage', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add Image'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('products_id');
		echo $this->Form->input('filename', array('type' => 'file'));
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('alt_description');
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>

