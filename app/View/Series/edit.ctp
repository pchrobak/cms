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
	  $this->Html->addCrumb('Edit '.$this->data['Series']['series_name'], '/series');?>
	
	<fieldset>
		<legend><?php echo __('Edit Series'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Series.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Series.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Series'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('Series'); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('series_name', array('class' => 'input-xxlarge'));
		echo $this->Form->input('overview', array('class'=>'ckeditor'));?>
		<div class="input text">
			<label for="SeriesImage">Series Image</label>
			<input id="xFilePath" name="data[Series][series_badge]" value="<?php echo $this->data["Series"]["series_badge"]?>" type="text" class="input-xlarge">
			<input type="button" class="btn" style="margin:0 0 10px 15px;" value="Browse Server" onclick="BrowseServer();" />
		</div>
<?php
		
		echo $this->Form->input('meta_title', array('class' => 'input-xxlarge'));
		echo $this->Form->input('meta_description', array('class' => 'input-mysize-textarea'));
		echo $this->Form->input('meta_keywords', array('class' => 'input-mysize-textarea'));
	?>
	    <?php echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>
