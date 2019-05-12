<?php
	include 'header.php';
?>
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Kode Kereta</th>
					<th>Kode Gerbong</th>
					<th>Kode Kursi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($kereta as $row):

				?>
					
					<tr>
						<td><?=$row->Nama?>
						<td><?=$row->KodeKereta?></td>
						<td><?=$row->KodeGerbong?></td>
						<td><?=$row->KodeKursi?></td>
					</tr>
				<?php endforeach; ?>
			<tbody>
		</table>

	</body>
</html>
