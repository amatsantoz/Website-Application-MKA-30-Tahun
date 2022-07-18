<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Halo</h3>
			</div>
			<div class="box-body">
				<div class="callout callout-info">
					<h4>Selamat Datang</h4>
					<p>Silahkan  Pilih Salah Satu Menu Dibawah Ini.</p>
				</div>
			</div>
			<section class="content">
					<div class="row">
					<div class="col-md-4">
						<center>
						<div class="<?php if($this->uri->segment(1)=='form') echo 'active';?>">
								<a href="<?php echo site_url('form') ?>">
									<button type="button" class="btn btn-primary btn-lg">
									<i class="fa fa-list-alt"></i>  &nbsp;Form	
									</button>
								</a>
							</div>
							</center>
					</div>
					<div class="col-md-4">
						<center>
						<div class="<?php if($this->uri->segment(1)=='dataform') echo 'active';?>">
								<a href="<?php echo site_url('dataform') ?>">
									<button type="button" class="btn btn-primary btn-lg">
									<i class="fa fa-folder-open"></i>  &nbsp;Data Form
									</button>
								</a>
							</div>
							</center>
					</div>
					<div class="col-md-4">
						<center>
						<div class="<?php if($this->uri->segment(1)=='unit') echo 'active';?>">
								<a href="<?php echo site_url('unit') ?>">
									<button type="button" class="btn btn-primary btn-lg">
									<i class="fa fa-book"></i>  &nbsp;Unit
									</button>
								</a>
							</div>
							</center>
					</div>
		</div>
	</div>
</div>