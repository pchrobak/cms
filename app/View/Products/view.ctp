<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Series'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Series']['series_name'], array('controller' => 'series', 'action' => 'view', $product['Series']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prod Directory'); ?></dt>
		<dd>
			<?php echo h($product['Product']['prod_directory']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Keywords'); ?></dt>
		<dd>
			<?php echo h($product['Product']['meta_keywords']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Title'); ?></dt>
		<dd>
			<?php echo h($product['Product']['meta_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meta Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['meta_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quick Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['quick_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Body Copy'); ?></dt>
		<dd>
			<?php echo h($product['Product']['body_copy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Specs'); ?></dt>
		<dd>
			<?php echo h($product['Product']['specs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priced Per'); ?></dt>
		<dd>
			<?php echo h($product['Product']['priced_per']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Msrp Usd'); ?></dt>
		<dd>
			<?php echo h($product['Product']['msrp_usd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($product['Product']['visible']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Series'), array('controller' => 'series', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Series'), array('controller' => 'series', 'action' => 'add')); ?> </li>
	</ul>
</div>
