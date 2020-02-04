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
						<label for="barang">Nama Barang</label>
						<input type="text" name="barang" class="form-control" id="barang">
						<small class="form-text text-danger"><?= form_error('barang') ?></small>
					</div>	

					<div class="form-group">
						<label for="deskripsi">Deskripsi Barang</label>
						<input type="text" name="deskripsi" class="form-control" id="deskripsi">
						<small class="form-text text-danger"><?= form_error('deskripsi') ?></small>
					</div>	

					<button type="submit" name="tambah" class="btn btn-primary float-right">Masukan Barang</button>

					</form>

					

				  </div>
				  
			</div>

		

		</div>

	</div>

</div>