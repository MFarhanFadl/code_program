<div class="container mt-5 mb-5 pb-5 bg-light">
	
	<div class="row mt-3 mx-auto bg-item" style="width: 100%;">
		<div class="col-md-6 mx-auto" style="width: 100%;">

			<h3 class="w3-center mt-4 mb-4">Gudang</h3>

			<table class=" container mx-auto table table-hover table-bordered" style="width: 100%;">

			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Kode Barang</th>
			      <th scope="col">Kode Penyimpanan</th>
			      <th scope="col">Kode Pelanggan</th>
			      <th scope="col">Jumlah</th>
			    </tr>
			  </thead>
				<?php foreach( $penyimpanan as $pny ) : ?>
			  <tbody>
			    <tr>
			      <td><?= $pny['id_barang']; ?></td>
			      <td><?= $pny['id_slot']; ?></td>
			      <td><?= $pny['id_kostumer']; ?></td>
			      <td><?= $pny['jumlah']; ?></td>			
			    </tr>
			  </tbody>
			  	<?php endforeach; ?>

			</table>
		</div>

	</div>

</div>