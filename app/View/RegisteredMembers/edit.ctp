<div class="page-content">
	<?php $this->Html->addCrumb('Members', '/registered_members');
	  $this->Html->addCrumb('Edit '.$this->data['RegisteredMember']['email'], '/registered_members');?>
	
	<fieldset>
		<legend><?php echo __('Edit Member'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RegisteredMember.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RegisteredMember.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('RegisteredMember'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('optin_promotions');
		echo $this->Form->input('password');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('address');
		echo $this->Form->input('address2');
		echo $this->Form->input('city');
		echo $this->Form->input('state_id');
		echo $this->Form->input('zip');
		echo $this->Form->input('birthday', array('minYear'=>'1920', 'maxYear'=>'2000'));
		echo $this->Form->input('email');
	?>
	    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
