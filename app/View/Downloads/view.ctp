<div class="downloads view">
<h2><?php  echo __('Download'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($download['Download']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($download['Download']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($download['Download']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($download['Download']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($download['Download']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Download'), array('action' => 'edit', $download['Download']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Download'), array('action' => 'delete', $download['Download']['id']), null, __('Are you sure you want to delete # %s?', $download['Download']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Downloads'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Download'), array('action' => 'add')); ?> </li>
	</ul>
</div>
