<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

<div class="page-content">
	<?php $this->Html->addCrumb('Finishes', '/finishes');
	$this->Html->addCrumb('Add Finish', '/finish/add');?>
	<?php echo $this->Form->create('Finish', array('type' => 'file')); ?>
		<fieldset>
			<legend><?php echo __('Add a Finish'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Finishes'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('name', array('class'=>'input-xxlarge'));
		echo $this->Form->input('logo', array('type' => 'file'));
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
