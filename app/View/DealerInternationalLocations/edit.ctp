<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>
<script type="text/javascript">
function BrowseServer()
{
	// You can use the "CKFinder" class to render CKFinder in a page:
	var finder = new CKFinder();
	finder.basePath = '../';	// The path for the installation of CKFinder (default = "/ckfinder/").
	finder.startupPath = "Files:/dealers/logos";
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
	<?php $this->Html->addCrumb('International Dealer Locations', '/dealer_international_locations');
	  $this->Html->addCrumb('Edit '.$this->data['DealerInternationalLocation']['company_name'], '/dealer_international_locations');?>
	
	<fieldset>
		<legend><?php echo __('Edit Location'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DealerInternationalLocation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DealerInternationalLocation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('DealerInternationalLocation'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('type', array('class' => 'input-xlarge', 'options'=> array('international'=>'International Dealer','distributor'=>'International Distributor'), 'empty'=>'Select Type of International Dealer', 'label'=>'Unit Of Measure'));
		echo $this->Form->input('company_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('address', array('class' => 'ckeditor'));
		echo $this->Form->input('phone', array('class' => 'input-xxlarge'));
		echo $this->Form->input('website', array('class' => 'input-xxlarge'));?>
				<div class="input text">
					<label for="Logo">Product Image</label>
					<input id="xFilePath" name="data[DealerInternationalLocation][logo]" value="<?php echo $this->data["DealerInternationalLocation"]["logo"]?>" type="text" class="input-xlarge">
					<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
				</div>
				<?php
		echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
