<div class="container mt-5 mb-5 pb-5 bg-light">
	
	<div class="row mt-3 mx-auto bg-item" style="width: 100%;">

		<div class="col-md-6 mx-auto" style="width: 100%;">


			<div class="card mt-5">
			  <div class="card-header">
			    Detail Barang
			  </div>
			  <div class="card-body">
			    <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
			    <p class="card-text"><?= $barang['deskripsi'] ?></p>
			    <a href="<?= base_url(); ?>barang2" class="btn btn-primary">Kembali</a>
			  </div>
			</div>

		</div>
	</div>
</div>