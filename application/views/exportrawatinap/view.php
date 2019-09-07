<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table border="1">
						<thead>
							<tr>


								<th>Progress</th>
								<th>Progress</th>
								<th>Members</th>
								<th>Due Date</th>
								<th>Status</th>

							</tr>
						</thead>
						<tbody>

							<?php
							if( ! empty($list)){
							
							foreach ($list as $row) : ?>


									<tr>

									<td><?= $row->no_rawat ?></td>
									<td><?= $row->nam_pasien ?></td>
									<td><?= $row->kamar ?></td>
									<td><?= $row->tanggal ?></td>
									<td><?= $row->diagnosa_awal_masuk ?></td>
									


									</tr>
								<?php endforeach ?>
								<?php }?>
									</tbody>









							</table>

</body>
</html>