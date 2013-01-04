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
	<?php $this->Html->addCrumb('Categories', '/categories');
	  $this->Html->addCrumb('Edit '.$this->Form->value('Category.name'), '/categories');?>
	
	<fieldset>
		<legend><?php echo __('Edit Category'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('subcategory', array('type'=>'select', 'options' => $subcat, 'empty' => 'Select subcategory if applicable','class' => 'input-xlarge'));

		echo $this->Form->input('name', array('class' => 'input-xxlarge'));?>
		<div class="input text">
			<label for="SeriesImage">Overview Image</label>
			<input id="xFilePath" name="data[Category][overview_image]" value="<?php echo $this->data["Category"]["overview_image"]?>" type="text" class="input-xlarge">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>

		<?php echo $this->Form->input('overview', array('class' => 'ckeditor'));
		echo $this->Form->input('directory', array('type' => 'hidden', 'value' => strtolower(str_replace(" ", '-',$this->data["Category"]["name"]))));
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-xxlarge'));
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>