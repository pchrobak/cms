<?php $this->Html->addCrumb('Series', '/series');
	  $this->Html->addCrumb('Add Series', '/series/add');?>
<?php echo $this->Form->create('Series'); ?>
	<fieldset>
		<legend><?php echo __('Add Series'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></button></legend>
	<?php
		echo $this->Form->input('series_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('series_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('html_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('directory', array('class' => 'input-xxlarge'));
		echo $this->Form->input('sort');
		echo $this->Form->input('overview', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('product_line_overview', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('series_badge');
		echo $this->Form->input('visible');
		echo $this->Form->input('meta_title', array('class' => 'iinput-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('meta_other', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('modified_by', array('class' => 'input-mysize-textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>


