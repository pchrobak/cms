<div class="container">
<h2><?php  echo __('Series'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($series['Series']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Series Name'); ?></dt>
		<dd>
			<?php echo h($series['Series']['series_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Html Name'); ?></dt>
		<dd>
			<?php echo h($series['Series']['html_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Directory'); ?></dt>
		<dd>
			<?php echo h($series['Series']['directory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort'); ?></dt>
		<dd>
			<?php echo h($series['Series']['sort']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Overview'); ?></dt>
		<dd>
			<?php echo h($series['Series']['overview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Line Overview'); ?></dt>
		<dd>
			<?php echo h($series['Series']['product_line_overview']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Series Badge'); ?></dt>
		<dd>
			<?php echo h($series['Series']['series_badge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($series['Series']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($series['Series']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($series['Series']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keywords'); ?></dt>
		<dd>
			<?php echo h($series['Series']['meta_keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Other'); ?></dt>
		<dd>
			<?php echo h($series['Series']['meta_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($series['Series']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($series['Series']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>

	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Series'), array('action' => 'edit', $series['Series']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Series'), array('action' => 'delete', $series['Series']['id']), null, __('Are you sure you want to delete # %s?', $series['Series']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Series'), array('action' => 'add')); ?> </li>
	</ul>
</div>
