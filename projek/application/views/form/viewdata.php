<div class="row">


	<form action="<?php echo site_url('form/simpan') ?>" method="post" accept-charset="utf-8">
		<div class="modal-content">

			
				<div class="col-md-12">
					<div class="form-horizontal">
						<div class="box-body">
							<div class="form-group">
								<input type="hidden" name="nopeg" id="nopeg" class="form-control"
									<?php $nopeg = '23234'; ?>value="<?php echo $nopeg; ?>" required="">
								<label for="" class="col-sm-3 control-label">To </label>
								<div class="col-sm-4">

									<select required name="unit" id="unit" class="form-control">
										<option value="">-- Pilih Unit --</option>
										<?php
									// $dd_bidang = $this->db->query("SELECT * FROM unit");                                
									foreach ($dd_bidang as $row) {  
									echo "<option value='".$row->nama."'>".$row->nama."</option>";
									}
									echo"
									</select>"
									?>

								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">Subject</label>
								<div class="col-sm-5">
									<input type="text" name="subject" id="subject" class="form-control" value=""
										placeholder="Masukkan Subject" required="">
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">Message</label>
								<div class="col-sm-7">
									<textarea id="message" name="message" placeholder="Message" cols="70"
										rows="5"></textarea>
								</div>
							</div>

						</div>
					</div>
				</div>
			
			<div class="modal-footer">
				<!-- <a data-toggle="modal" data-target="#konfirmasi_tambah"> -->
				<a onClick="return confirm('Message Anda Akan Diteruskan ke VP HC dan Unit Terkait ?')">
					<button type="submit" class="btn btn-primary">
						<i class="glyphicon glyphicon-ok"></i> &nbsp; Submit
					</button>
				</a>
			</div>
		</div>
	</form>
</div>



<div class="modal fade" id="konfirmasi_tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<b>Message Anda Akan Diteruskan ke VP HC dan Unit Terkait ?</b><br><br>
				<a href="<?php echo site_url('form/simpan')?> class=" btn btn-danger btn-ok"> Submit</a>
				<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i>
					Batal</button>
			</div>
		</div>
	</div>
</div>
