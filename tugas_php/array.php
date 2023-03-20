<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: center;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
			color: #333;
			font-weight: bold;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

	</style>
</head>
<body>
	<h2>Daftar Nilai</h2>
	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// Data Nilai
				$nilai = array(
					array("No. 1", "Andi", 85),
					array("No. 2", "Budi", 70),
					array("No. 3", "Cindy", 90),
					array("No. 4", "Dodi", 80),
					array("No. 5", "Eka", 95)
				);

				// Tampilkan Data
				for ($i = 0; $i < count($nilai); $i++) {
					echo "<tr>";
					echo "<td>" . $nilai[$i][0] . "</td>";
					echo "<td>" . $nilai[$i][1] . "</td>";
					echo "<td>" . $nilai[$i][2] . "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</body>
</html>
