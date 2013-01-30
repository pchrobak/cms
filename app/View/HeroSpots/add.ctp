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
	<?php $this->Html->addCrumb('Homepage Hero Spots', '/hero_spots');
		  $this->Html->addCrumb('Add Spot', '/hero_spots/add');?>
	<?php echo $this->Form->create('HeroSpot'); ?>
		<fieldset>
			<legend><?php echo __('Add Spot'); ?> <button class="btn pull-right"><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?></button></legend>
		<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('sort');
		echo $this->Form->input('title', array('class'=>'input-xxlarge'));?>
		<div class="input text">
			<label for="HeroImage">Series Image</label>
			<input id="xFilePath" name="data[HeroSpot][hero_image]" type="text" class="input-xlarge">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>
		<?php echo $this->Form->input('link', array('class'=>'input-xxlarge'));
	    echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
