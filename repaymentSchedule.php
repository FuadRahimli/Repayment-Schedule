<?php
//data
$purchaseAmount=4000;
$deposit=1000;
$numberMonthlyPayments=3;


//calculated value

$loanAmount=$purchaseAmount-$deposit;
$monthlyPayment=$loanAmount/$numberMonthlyPayments;
$balance=$loanAmount;



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RepaymentSchedule</title>
<style>
	table {table-layout: auto;width: 600px ;border:black 1px solid;border-collapse: collapse;}
	table th, table td {border:black 1px solid;text-align: center;}
</style>
</head>
<body>
<table>
<thead><tr><th>Date</th><th>Monthly Payment</th><th>Remaining Balance</th><tr></thead>
<tbody>
<?php	
$ts=time();
for ($i=1; $i <=$numberMonthlyPayments ; $i++) { 
	echo "<tr>\n";
$ts1=strtotime("+$i month",$ts);
	echo "<td>".date('d/m/Y',$ts1)."</td>\n";
	echo "<td>$monthlyPayment</td>\n";
	$balance-=$monthlyPayment;
	echo "<td>$balance</td>\n";
	echo "<tr>";
}

?>
</tbody>

</table>	
</body>
</html>