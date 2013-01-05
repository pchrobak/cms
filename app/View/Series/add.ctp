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
	<?php $this->Html->addCrumb('Series', '/series');
		  $this->Html->addCrumb('Add Series', '/series/add');?>
	<?php echo $this->Form->create('Series'); ?>
		<fieldset>
			<legend><?php echo __('Add Series'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></button></legend>
		<?php
			echo $this->Form->input('visible');
			echo $this->Form->input('series_name', array('class' => 'input-xxlarge'));
			echo $this->Form->input('html_name', array('class' => 'input-xxlarge'));
			echo $this->Form->input('directory', array('class' => 'input-xxlarge'));
			echo $this->Form->input('overview', array('class' => 'ckeditor'));?>
			<div class="input text">
			<label for="SeriesImage">Series Image</label>
				<input id="xFilePath" name="data[Series][series_badge]" type="text" class="input-xlarge">
				<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
			</div>
			<?php echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
			echo $this->Form->input('meta_description', array('class' => 'input-mysize-textarea'));
			echo $this->Form->input('meta_keywords', array('class' => 'input-mysize-textarea'));
		?>
		</fieldset>
	  <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
</div>


