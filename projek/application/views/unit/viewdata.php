<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script>
	
	function select_data($id, $nama, $pic, $email) {
		$("#id").val($id);
		$("#nama").val($nama);
		$("#pic").val($pic);
		$("#email").val($email);
	}

	function select_ubah($id, $nama, $pic, $email) {
		$("#id2").val($id);
		$("#nama2").val($nama);
		$("#pic2").val($pic);
		$("#email2").val($email);
	}

	
	function refresh($id,$nama, $pic, $email) {
		$("#id").val("");
		$("#nama").val("");
		$("#pic").val("");
		$("#email").val("");
	}
</script>
<?php 
	$data =$this->session->flashdata('suksess');
	if ($data!="") { ?>
			<div class="alert alert-success" role="alert"><strong>Sukses!!</strong>
			<?php echo $data; ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
			<span aria-hidden="true"></span>
		</div>
		<?php }
?>
<div class="row">
	<!-- left column -->
 	<div class="col-md-12">
 		<!-- general form elements -->
 		<div class="box box-primary">
		 <div class="box-header with-border">
				
				<div class="pull-right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"
						onclick="refresh()">
						<i class="fa fa-plus-circle"></i> &nbsp;Tambah Data
					</button>
				</div>
			</div>
			<div class="box-body">
 					<div class="table table-responsive">
					
					<table class="table table-bordered table-striped" id="table2" style="width:100%">
						<thead>
							<tr>
							<th style="text-align:center" width="20px">No</th>
								<th style="text-align:center"  width="20px">ID</th>
								<th style="text-align:center" >Unit</th>
                                <th style="text-align:center" width="180px">PIC</th>
                                <th style="text-align:center">Email</th>
								<th style="text-align:center"  width="90px">Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no =1;
								$datalaporan = $this->db->query("SELECT * FROM unit");
								foreach ($datalaporan->result() as $l) { ?>
									<tr>
									<td style="text-align:center"><?php echo $no++ ?></td>
										<td style="text-align:center"><?php echo $l->id ?></td>
										<td style="text-align:center"><?php echo $l->nama ?></td>
										<td><?php echo $l->PIC ?></td>
										<td style="text-align:center"><?php echo $l->email ?></td>
										<td style="text-align:center" >
										
											<a style="cursor: pointer;" onclick="select_ubah(
												'<?php echo $l->id ?>',
												'<?php echo $l->nama ?>',
												'<?php echo $l->PIC ?>',
												'<?php echo $l->email ?>'

											)" data-toggle="modal" data-target="#modal-ubah">
												<button class="btn btn-info btn-xs" >
													<i class="fa fa-edit"></i>Edit
												</button>
											</a>
											<a href="<?php base_url()?>unit/hapus/<?php echo $l->id; ?>"
											onClick="return confirm('Anda Yakin Ingin Menghapus Data ?')">
										<button class="btn btn-danger btn-xs">
											<i class="fa fa-trash-o"></i>Delete
										</button>
									</a>
										</td>
								
									</tr>
								<?php }
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-tambah" role="dialog">
	<div class="modal-dialog">
		<form action="<?php echo site_url('unit/tambah') ?>" method="post" accept-charset="utf-8">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal"></button>
					<h4 class="modal-title">Tambah Data</h4>
				</div>

				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Nama Unit</label>
									<div class="col-sm-4">
										<input type="hidden" name="id" id="id">
										<input type="text" name="nama" id="nama" class="form-control" value=""
											placeholder="Masukkan Nama Unit" required="" >
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">PIC</label>
									<div class="col-sm-6">
										<input type="text" name="pic" id="pic" class="form-control" value=""
											placeholder="Masukkan Nama PIC" required="" >
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="email" name="email" id="email" class="form-control" value=""
											placeholder="Masukkan email" required="">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
						<i class="glyphicon glyphicon-ok"></i> &nbsp; Simpan
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



<div class="modal fade" id="modal-ubah" role="dialog">
	<div class="modal-dialog">
		<form action="<?php echo site_url('unit/tambah') ?>" method="post" accept-charset="utf-8">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal"></button>
					<h4 class="modal-title">Ubah Data</h4>
				</div>

				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-horizontal">
							<div class="box-body">
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Nama Unit</label>
									<div class="col-sm-4">
										<input type="hidden" name="id" id="id2">
										<input type="text" name="nama" id="nama2" class="form-control" value=""
											placeholder="Masukkan Nama Unit" required="" >
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">PIC</label>
									<div class="col-sm-6">
										<input type="text" name="pic" id="pic2" class="form-control" value=""
											placeholder="Masukkan Nama PIC" required="" >
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="text" name="email" id="email2" class="form-control" value=""
											placeholder="Masukkan email" required="">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">
						<i class="glyphicon glyphicon-ok"></i> &nbsp; Simpan
					</button>
				</div>
			</div>
		</form>
	</div>
</div>