<div class="container">
	
	<div class="row mt-3">

		<div class="col-md-6">


			<div class="card">
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
						  	<option value="<?= $k[nama_kostumer]; ?>"><?= $k[nama_kostumer]; ?></option>
						  <?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="barang">Barang</label>
						<select class="custom-select" name="barang">
						  <option selected> </option>
						  <option value="bukalapak">botol</option>
						  <option value="tokopedia">gelas</option>
						  <option value="shopee">kertas</option>
						</select>
					</div>

					<div class="form-group">
						<label for="jumlah">Jumlah barang</label>
						<input type="text" name="jumlah" class="form-control" id="jumlah">
						<small id="emailHelp" class="form-text text-danger"><?= form_error('barang') ?></small>
					</div>	

					<div class="form-group">
					<input type="hidden" name="status" class="form-control" id="status" value="inbound">	
					</div>

					<button type="submit" name="tambah" class="btn btn-primary float-right">Transaksi</button>

					</form>

					

				  </div>
				  
			</div>

		

		</div>

	</div>

</div>