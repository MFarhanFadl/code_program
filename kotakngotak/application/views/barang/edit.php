<div class="container">
	
	<div class="row mt-3">

		<div class="col-md-6">


			<div class="card">
			  <div class="card-header">
			    Form Edit Barang
			  </div>

				  <div class="card-body">

					<form action="" method="post">

						<input type="hidden" name="di" value="<?= $transaksi['id_transaksi']?>">

						<div class="form-group">
						<label for="perusahaan">Kode Perusahaan</label>
						<select class="custom-select" name="perusahaan" id="perusahaan">
							<option>-pilih-</option>
						  <?php foreach($kostumer as $k) { ?>
						  	<option value="<?= $k['id_kostumer']; ?>" <?=$k['id_kostumer'] == $transaksi['id_kostumer'] ? "selected" : null?>><?= $k['nama_kostumer']; ?></option>
						  <?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="barang">Barang</label>
						<select class="custom-select" name="barang" id="barang">
							<option>-pilih-</option>
						  <?php foreach($barang as $brg) { ?>
							  	<option value="<?= $brg['id_barang'] ?>" <?=$brg['id_barang'] == $transaksi['id_barang'] ? "selected" : null?>><?= $brg['nama_barang'] ?></option>
						  <?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label for="jumlah">Jumlah barang</label>
						<input type="text" name="jumlah" class="form-control" id="jumlah"  value="<?= $transaksi['jumlah']  ?>">
						<small id="emailHelp" class="form-text text-danger"><?= form_error('jumlah') ?></small>
					</div>	

					<div class="form-group">
						<label for="status">Status</label>
						<select class="custom-select" name="status" id="status">
							<?php foreach ($status as $s) : ?>
								<?php if($s == $transaksi['status']) : ?>
									<option value="<?= $s  ?>" selected><?= $s ?></option>
								<?php else : ?>
									<option value="<?= $s  ?>"><?= $s ?></option>
								<?php endif; ?>
							<?php endforeach; ?>
							
						</select>
					</div>

					<button type="submit" name="tambah" class="btn btn-dark float-right">Ubah Transaksi</button>

					</form>

					

				  </div>
				  
			</div>

		

		</div>

	</div>

</div>