<div class="page-content">
	<?php $this->Html->addCrumb('US Dealer Locations', '/dealer_us_locations');
		  $this->Html->addCrumb('Add US Dealer Location', '/dealer_us_locations/add');?>
	<?php echo $this->Form->create('DealerUsLocation'); ?>
		<fieldset>
			<legend><?php echo __('Add US Dealer Location'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('company_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address1', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address2', array('class' => 'input-xxlarge'));
		echo $this->Form->input('city', array('class' => 'input-xlarge'));
		echo $this->Form->input('state_id', array('class' => 'input-xlarge'));
		echo $this->Form->input('zip', array('class' => 'input-xlarge'));
		echo $this->Form->input('phone', array('class' => 'input-xlarge'));
		echo $this->Form->input('url', array('class' => 'input-xxlarge'));?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
