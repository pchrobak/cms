<?php 
	
	$current_page = $this->params['action'];

?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" target="_blank" href="/cake/">CMS</a>
			<div class="nav-collapse">
				<ul class="nav nav-pills">
					<li <?php if($current_page=="index"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Scaffolding', array('controller' => 'app', 'action' => 'index')); ?>
					</li>
					<li <?php if($current_page=="base_css"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Base CSS', array('controller' => 'app', 'action' => 'base_css')); ?>
					</li>
					<li <?php if($current_page=="components"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Components', array('controller' => 'app', 'action' => 'components')); ?>
					</li>
					<li <?php if($current_page=="javascript"){echo'class="active"';} ?>>
						<?php echo $this->Html->link('Javascript plugins', array('controller' => 'app', 'action' => 'javascript')); ?>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">Products</a></li>
							<li><?php echo $this->Html->link('Series', array('controller' => 'series', 'action' => 'index')); ?></li>
						</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Tools <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#buttonGroups">Categories</a></li>
							<li><a href="#buttonDropdowns">Downloads</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>
</div><br><br>