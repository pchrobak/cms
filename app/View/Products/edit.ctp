<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
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
	  $this->Html->addCrumb('Edit '.$this->data["Product"]["name"], '/products');?>
	
	<fieldset>
		<legend><?php echo "Edit ".$this->data["Product"]["name"]; ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>
		
	<ul class="nav nav-tabs" id="myTab">
	  <li><a href="#details" data-toggle="tab" class="active">Product Details</a></li>
	  <li><a href="#gallery" data-toggle="tab">Image Gallery</a></li>
	  <li><a href="#specs" data-toggle="tab">Product Specs</a></li>
	  <li><a href="#downloads" data-toggle="tab">Product Downloads</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade" id="details">
			<?php echo $this->Form->create('Product'); ?>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('visible');
				echo $this->Form->input('name', array('class' => 'input-xxlarge'));
				echo $this->Form->input('series_id', array('empty'=>true));
				echo $this->Form->input('Category');?>
				<div class="input text">
					<label for="ProductsImage">Product Image</label>
					<input id="xFilePath" name="data[Product][product_image]" value="<?php echo $this->data["Product"]["product_image"]?>" type="text" class="input-xlarge">
					<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
				</div>
				<?php
				echo $this->Form->input('quick_description', array('class' => 'input-xxlarge'));
				echo $this->Form->input('body_copy', array('class' => 'ckeditor'));
				echo $this->Form->input('priced_per', array('class' => 'input-xlarge', 'options'=> array('each'=>'each','single'=>'single','system'=>'system'), 'empty'=>true));
				echo $this->Form->input('msrp_usd', array('class' => 'input-xlarge'));
				echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
				echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
				echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
				echo $this->Form->submit('Submit', array('class' => 'btn'));
				echo $this->Form->end();?>
			
			</fieldset>
		</div>
		
		<!--CONTENT FOR IMAGE GALLERY-->
		<div class="tab-pane" id="gallery">
			<p>image gallery here</p>
		</div>
		
		<!--CONTENT FOR SPECS-->
		<div class="tab-pane" id="specs">
		<h5><?php echo $this->data["Product"]["name"];?> Specifications</h5>
			<?php echo $this->Form->create('Product'); ?>
			<fieldset>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('specs', array('class' => 'ckeditor', 'label'=>''));
				echo $this->Form->submit('Submit', array('class' => 'btn'));
				echo $this->Form->end();?>
			
			</fieldset>
		</div>
		
		<!--CONTENT FOR DOWNLOADS-->
		<div class="tab-pane" id="downloads">
		<h5><?php echo $this->data["Product"]["name"];?> Downloads</h5>
			<?php echo $this->Form->create('Product'); ?>
			<fieldset>
			<?php
				echo $this->Form->input('Download', array('label'=>''));
				echo $this->Form->submit('Submit', array('class' => 'btn'));
				echo $this->Form->end();?>
			</fieldset>
		</div>
	</div>
</div>
<script>
  $(function () {
    $('#myTab a:first').tab('show');
  })
</script>