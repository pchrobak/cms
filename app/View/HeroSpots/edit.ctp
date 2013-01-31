<?php echo $this->Html->script('ckeditor/ckeditor');?>
<?php echo $this->Html->script('ckfinder/ckfinder.js');?>

	
	
<div class="page-content">
	<?php $this->Html->addCrumb('Homepage Hero Spots', '/hero_spots');
	  $this->Html->addCrumb('Edit '.$this->data['HeroSpot']['title'], '/series');?>
	
	<fieldset>
		<legend><?php echo __('Edit Spot'); ?>
			<div class="btn-group pull-right">
				<button class="btn">Actions</button>
				<button class="btn dropdown-toggle" data-toggle="dropdown">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HeroSpot.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HeroSpot.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Spots'), array('action' => 'index')); ?></li></ul>
			</div>
		</legend>

		<?php echo $this->Form->create('HeroSpot', array('type' => 'file')); ?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('visible');
		echo $this->Form->input('sort');
		echo $this->Form->input('title', array('class'=>'input-xxlarge'));?>
		<div class="input file">
			<?php echo $this->Html->image('thumbs/thumb_'.$this->data['HeroSpot']['hero_image'], array('fullBase' => true, 'align'=>'right'));?>
			<label for="HeroSpotHeroImage">Hero Image</label>
			
			<input type="file" name="data[HeroSpot][hero_image]" value="data[HeroSpot][hero_image]" id="HeroSpotHeroImage"/>
		</div><?php
		echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('link', array('class'=>'input-xxlarge'));
	    echo $this->Form->submit('Submit', array('class' => 'btn'));
		echo $this->Form->end();?>
	
	</fieldset>
</div>