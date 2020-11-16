<?php
session_start();
if ($_SESSION['current_authorization'] != 'user')
{
	header("Location: index.php");
	exit();
}
?>
<?php
include 'connection.php';
$query = "SELECT * FROM  transactions WHERE account_number='$_SESSION[current_accountnumber]' ORDER BY id DESC";
$result = mysqli_query($conn,$query);
$a = array(array("No", "Details", "Amount", "Day", "Time"));
$counter = 1;
while ($row = mysqli_fetch_array($result))  
{
	$account_number=$row["account_number"];
	$amount=$row["amount"];
	$details=$row["details"];
	$time=$row["time"];
	$day=$row["day"];
	array_push($a,array($counter,$details,$amount,$day,$time));
	$counter++;
}
function array_to_csv_download($array, $filename = "Account Statement.csv", $delimiter=",") {
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');
    $f = fopen('php://output', 'w');
    foreach ($array as $line) {
        fputcsv($f, $line, $delimiter);
    }
}
array_to_csv_download($a,"Account Statement.csv");
?>