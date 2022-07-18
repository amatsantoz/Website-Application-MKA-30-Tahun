<ul class="sidebar-menu tree" data-widget="tree">
<li class="header">MAIN MENU</li>
	<li class="<?php if($this->uri->segment(1)=='home') echo 'active';?>">
		<a href="<?php echo site_url('home') ?>">
			<i class="fa fa-home"></i> <span>Home</span>
		</a>
	</li>
	<li class="<?php if($this->uri->segment(1)=='form') echo 'active';?>">
		<a href="<?php echo site_url('form') ?>">
			<i class="fa fa-folder-open"></i> <span>Form</span>
		</a>
	</li>
	<li class="<?php if($this->uri->segment(1)=='dataform') echo 'active';?>">
		<a href="<?php echo site_url('dataform') ?>">
			<i class="fa fa-folder-open"></i> <span>Data</span>
		</a>
	</li>
	<li class="<?php if($this->uri->segment(1)=='unit') echo 'active';?>">
		<a href="<?php echo site_url('unit') ?>">
			<i class="fa fa-book"></i> <span>Unit</span>
		</a>
	</li>
		
	

</ul>
