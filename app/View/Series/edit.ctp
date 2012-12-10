<div class="page-content">
	<?php $this->Html->addCrumb('Series', '/series');
	  $this->Html->addCrumb('Edit '.$this->Form->value('Series.series_name'), '/series');?>
	
	<fieldset>
		<legend><?php echo __('Edit Series'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Series.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('Series'); ?>
	<?php
		echo $this->Form->input('id');
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

<?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>
</div>