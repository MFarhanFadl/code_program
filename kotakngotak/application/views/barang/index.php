<div class="container mt-5 mb-5 pb-5 bg-light">

	<?php if( $this->session->flashdata('data') ) : ?>

	<div class="row mt-3">
		<div class="col mt-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data barang <strong>berhasil </strong><?= $this->session->flashdata('data'); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>

	<?php endif; ?>
	
	<div class="row mt-3 mx-auto bg-item" style="width: 100%;">
		<div class="col-md-6 mx-auto" style="width: 100%;">

			<h3 class="w3-center mt-4 mb-4">Barang Masuk</h3>

			<table class=" container mx-auto table table-hover table-bordered" style="width: 100%;">

			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Kode Pelanggan</th>
			      <th scope="col">Kode Barang</th>
			      <th scope="col">Jumlah</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
				<?php foreach( $transaksi as $trs ) : ?>
			  <tbody>
			    <tr>
			      <td><?= $trs['id_kostumer']; ?></td>
			      <td><?= $trs['id_barang']; ?></td>
			      <td><?= $trs['jumlah']; ?></td>
			      <td><?= $trs['status']; ?></td>
					
			    </tr>
			  </tbody>
			  	<?php endforeach; ?>

			</table>

		</div>

		<div class="col-md-6 mx-auto" style="width: 100%;">
			<table class=" container mx-auto table table-hover table-bordered" 
			style="width: 100%;">
			<h3 class="w3-center mt-4 mb-4">Barang Keluar</h3>

			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Kode Pelanggan</th>
			      <th scope="col">Kode Barang</th>
			      <th scope="col">Jumlah</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
				<?php foreach( $transaksi2 as $trs2 ) : ?>
			  <tbody>
			    <tr>
			      <td><?= $trs2['id_kostumer']; ?></td>
			      <td><?= $trs2['id_barang']; ?></td>
			      <td><?= $trs2['jumlah']; ?></td>
			      <td><?= $trs2['status']; ?></td>
					
			    </tr>
			  </tbody>
			  	<?php endforeach; ?>

			</table>

		</div>

	</div>

	<div class="row mt-3 w3-center">
		<div class="col-md-6 mx-auto" style="width:  100%">
			<a href="<?= base_url(); ?>barang/tambah" class="btn btn-info ">Masukan barang</a>
			<a href="<?= base_url(); ?>barang/ambil" class="btn btn-info ">Ambil barang</a>
		</div>
	</div>

</div>