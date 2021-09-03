<?php 
$data = file_get_contents('https://blockchain.info/ticker');
$databit = json_decode($data, true);



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Bitcoin</title>
	<style>
		h1,h3 {
			text-align: center;
		}

	</style>
</head>
<body>

	<h1>Harga Bitcoin Hari ini</h1>

	<table border="1" cellpadding="10" cellspacing="0" align="center">
		<tr>
			<th>Mata Uang</th>
			<th>Harga Beli Bitcoin</th>
			<th>Harga Jual Bitcoin</th>
		</tr>
		<?php foreach($databit as $row): ?>
		<tr>
			<td><?= $row["symbol"]; ?></td>
			<td><?= $row["buy"]; ?></td>
			<td><?= $row["sell"]; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
<hr>
	

	<h1>Konversi Rupiah Ke Bitcoin</h1>
	<h3>Kurs 1 USD = 14.000 IDR</h3>

	<center><input type="number" name="rupiah" placeholder="1"></center>

	<h1>BTC 1 = Rp 102682860</h1>
	<hr>

	<h1>Konversi Bitcoin Ke Rupiah</h1>
	<h3>Kurs 1 USD = 14.000 IDR</h3>

	<center><input type="number" name="rupiah" placeholder="1"></center>

	<h1>BTC 1 = Rp 102682860</h1>

</body>
</html>