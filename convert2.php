<?php 
	if(isset($_POST["submit"]))
	{
		$from = $_POST["from"];
		$to = $_POST["to"];
		$amount =$_POST["amount"];

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://blockchain.info/tobtc?currency=USD&value=500",
			CURLOPT_RETURNTRANSFER => 1
		));
		$response = curl_exec($curl);
		// $response = json_decode($response, true);
		print_r($response);
	}

 ?>


<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<h1 align="center">Konversi Bitcoin Ke Rupian</h1>
<h3 align="center">Kurs 1 USD = 14.000 IDR</h3>

<div class="container">
	<form method="POST">
		<div class="form-group">
			<label>From</label>
			<input name="from" class="form-control">
		</div>

		<div class="form-group">
			<label>To</label>
			<input name="to" class="form-control">
		</div>

		<div class="form-group">
			<label>Amount</label>
			<input name="amount" class="form-control">
		</div>
		<br>
		<input type="submit" name="submit" class="btn btn-success" value="convert">
	</form>
</div>

<h3 align="center">BTC 1 = RP 102682860</h3>