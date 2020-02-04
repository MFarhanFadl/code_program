<div class="container mt-5 mb-5 pb-5 bg-light">
	
	<div class="row mt-3 mx-auto bg-item" style="width: 100%;">

		<div class="col-md-6 mx-auto" style="width: 100%;">


			<div class="card mt-5">
			  <div class="card-header">
			    Form Tambah Barang
			  </div>

				  <div class="card-body">

					<form action="" method="post">

					<div class="form-group">
						<label for="perusahaan">Kode Perusahaan</label>
						<select class="custom-select" name="perusahaan" id="perusahaan">
							<option>- pilih -</option>
						  <?php foreach($kostumer as $k) { ?>
						  	<option value="<?= $k['id_kostumer']; ?>"><?= $k['nama_kostumer']; ?></option>
						  <?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="barang">Barang</label>
						<select class="custom-select" name="barang" id="barang">
						  <option selected>- pilih -</option>
						  <?php foreach($barang as $brg) { ?>
						  	<option value="<?= $brg['id_barang']; ?>"><?= $brg['nama_barang']; ?></option>
						  <?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="jumlah">Jumlah barang</label>
						<input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="masukan jumlah">
						<small id="emailHelp" class="form-text text-danger"><?= form_error('jumlah') ?></small>
					</div>	

					<div class="form-group">
					<input type="hidden" name="status" class="form-control" id="status" value="outbound">
					</div>

					<button type="submit" name="tambah" class="btn btn-dark float-right">Ambil</button>

					</form>

					

				  </div>
				  
			</div>

		

		</div>

	</div>

</div>