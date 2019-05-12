<?php
	include 'header.php';
?>
<br><br>
<h2 align="center">Tabel yang akan di join</h2>
<br><br>
		<h3>LOKOMOTIF</h3>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Kereta</th>
					<th>Nama Kereta</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($lokomotif as $row):

				?>
					
					<tr>
						<td><?=$row->KodeKereta?></td>
						<td><?=$row->NamaKereta?></td>
					</tr>
				<?php endforeach; ?>
			<tbody>
		</table>

<br>
		<h3>GERBONG</h3>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Gerbong</th>
					<th>Kode Kereta</th>
					<th>Nama Gerbong</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($gerbong as $row):

				?>
					
					<tr>
						<td><?=$row->KodeGerbong?></td>
						<td><?=$row->KodeKereta?></td>
						<td><?=$row->NamaGerbong?></td>
					</tr>
				<?php endforeach; ?>
			<tbody>
		</table>
<br>
		<h3>KURSI</h3>
		<table class="table">
			<thead>
				<tr>
					<th>Kode Kursi</th>
					<th>Kode Gerbong</th>
					<th>Kode Kereta</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($kursi as $row):

				?>
					
					<tr>
						<td><?=$row->KodeKursi?></td>
						<td><?=$row->KodeGerbong?></td>
						<td><?=$row->KodeKereta?></td>
					</tr>
				<?php endforeach; ?>
			<tbody>
		</table>

	</body>
</html>
