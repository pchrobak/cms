<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
	function BrowseServer()
	{
		// You can use the "CKFinder" class to render CKFinder in a page:
		var finder = new CKFinder();
		finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
		finder.selectActionFunction = SetFileField;
		finder.popup();
	}

	// This is a sample function which is called when a file is selected in CKFinder.
	function SetFileField( fileUrl )
	{
		document.getElementById( 'xFilePath' ).value = fileUrl;
	}
</script>
<div class="page-content">
	<?php $this->Html->addCrumb('Products', '/products');
		  $this->Html->addCrumb('Add Product', '/products/add');?>
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Add Product'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Product'), array('action' => 'index')); ?></button></legend>
	<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('series_id');
		echo $this->Form->input('Category');?>
		<div class="input text">
			<label for="ProductsImage">Product Image</label>
			<input id="xFilePath" name="data[Product][product_image]" value="" type="text" class="input-xlarge">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>
		<?php
		echo $this->Form->input('prod_directory', array('class' => 'input-xxlarge'));
		echo $this->Form->input('quick_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('body_copy', array('class' => 'ckeditor'));
		echo $this->Form->input('specs', array('class' => 'ckeditor'));
		echo $this->Form->input('priced_per', array('class' => 'input-xxlarge'));
		echo $this->Form->input('msrp_usd', array('class' => 'input-xxlarge'));
		
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
	?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>

