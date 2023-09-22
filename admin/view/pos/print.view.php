<?php 

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{

 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
 		
 		$WshShell = new COM("WScript.Shell");
 		///$obj = $WshShell->Run("cmd /c wscript.exe www/public/file.vbs",0, true); 
 		$obj = $WshShell->Run("cmd /c wscript.exe ".ABSPATH."/file.vbs",0, true); 
  
 	 
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=esc(APP_NAME)?></title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
    
</head>
<body>
	<style>
		body{
			font-size: 10px;
			color: black;
		}
		h4{
			font-size: 10px;

		}
	</style>
	<?php 

		$vars = $_GET['vars'] ?? "";

		$obj = json_decode($vars,true);

	?>
<?php if(is_array($obj)): date_default_timezone_set("Asia/Manila");?>

	<center>
		<h1 class="text-secondary"><?=esc(APP_NAME)?></h1>
		<h4 class="text-secondary">TR-<?php echo date("Ymd-His")?></h4>
		<div><i><?=date("F j, Y(l) h:i a")?></i></div>
	</center>

	<table class="table table-sm border-white p-1">
	<tr style="height: 10px;"></tr>

		<?php foreach ($obj['data'] as $row):?>
			<tr>
			<td class="d-flex row p-0"><div class="col-12"><b>(<?=$row['p_name']?>) </b><?=$row['description']?></div></td>
			</tr>
			<tr>
				<td class="d-flex row p-0"><div class="col"><?=$row['qty']?> PC</div><div class="col">@<?=$row['price']?></div><div class="col"><?=number_format($row['qty'] * $row['price'],2)?></div></td>
			</tr>
	
		<?php endforeach;?>
			<tr style="height: 10px;"></tr>
		<tr>
			<td class="d-flex row p-0"><div class="col">Total-items: </div><div class="col text-center"><?= $obj['count']?></div> </td>
		</tr>

		<tr>
			<td class="d-flex row p-0"><div class="col">Total: </div><div class="col text-center"><?=number_format($obj['gtotal'],2)?></div> </td>
		</tr>
		<tr>
			<td class="d-flex row p-0 "><div class="col">Amount paid: </div><div class="col text-center"><?=number_format($obj['amount'],2)?></div> </td>
		</tr>
		<tr>
			<td class="d-flex row p-0"><div class="col">Change: </div><div class="col text-center"><?=number_format($obj['change'],2)?></div> </td>
		</tr>
		
		<tr style="height: 1px;"></tr>
	</table>
	<tr>
		<center><td><b><?= strtoupper($obj['take'])?></b></td><br></center>
		<center><td class="text-dark">Table no.: <b><?= $obj['table']?></b></td><br></center>
		<center><td>Cashier: <?php echo auth('name') ?></td><br></center>
		<center><td>Crossing Brgy. San. Simon Area C Dasmarinas Cavite</td><br></center>
		<center><td>Thanks for eating with us!</td></center>
		<center><td>...</td></center>
	</tr>
	
<?php endif;?>

<script>
	
	window.print();

	var ajax = new XMLHttpRequest();

	ajax.addEventListener('readystatechange',function(){

		if(ajax.readyState == 4)
		{
			//console.log(ajax.responseText);
		}
	});

	ajax.open('POST','',true);
	//ajax.send();

</script>
  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- data-tables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/table.js"></script>
    
</body>

</html>