<div class="page-content">
	<?php $this->Html->addCrumb('Series', '/series');?>
	<h3><?php echo __('Series Editor'); ?><button class="btn pull-right"><?php echo $this->Html->link(__('New Series'), array('action' => 'add')); ?></button></h3>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('series_name'); ?></th>
			<th><?php echo $this->Paginator->sort('directory'); ?></th>		
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($series as $series): ?>
	<tr>
		<td><?php echo h($series['Series']['id']); ?>&nbsp;</td>
		<td><?php echo h($series['Series']['series_name']); ?>&nbsp;</td>
		<td><?php echo h($series['Series']['directory']); ?>&nbsp;</td>
		<td><?php if($series['Series']['visible'] == 1){?><img src='img/test-pass-icon.png'><?php }else{?><img src='img/test-fail-icon.png'><?php }?></td>

		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $series['Series']['id'])); ?> | 
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $series['Series']['id']), null, __('Are you sure you want to delete # %s?', $series['Series']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		//echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		//echo $this->Paginator->numbers(array('separator' => ''));
		//echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>