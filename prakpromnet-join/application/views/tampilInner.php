<?php
	include 'header.php';
?>
		<table class="table">
			<thead>
				<tr>
					<th>Nama Kereta</th>
					<th>Kode Kursi</th>
					<th>Nama Gerbong</th>
					<th>Kode Gerbong</th>
					<th>Kode Kereta</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($kereta as $row):
							
				?>
					
					<tr>
						<td><?=$row->NamaKereta?></td>
						<td><?=$row->KodeKursi?></td>
						<td><?=$row->NamaGerbong?></td>
						<td><?=$row->KodeGerbong?></td>
						<td><?=$row->KodeKereta?></td>
					</tr>
				<?php endforeach; ?>
			<tbody>
		</table>

	</body>
</html>
