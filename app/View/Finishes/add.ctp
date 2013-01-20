<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
function BrowseServer()
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();
	finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.startupPath = "Images:/Finishes/";
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
	<?php $this->Html->addCrumb('Finishes', '/finishes');
	$this->Html->addCrumb('Add Finish', '/finish/add');?>
	<?php echo $this->Form->create('Finish'); ?>
		<fieldset>
			<legend><?php echo __('Add a Finish'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Finishes'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('name', array('class'=>'input-xxlarge'));
		?>
		<div class="input text">
		<label for="FinishFilename">Finish Image</label>
			<input id="FinishFilename" name="data[Finish][filename]" type="text" class="input-xlarge">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>
