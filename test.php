<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 centr"> 
				<form action=""  method="post">
						ENTER TABLE NAME: 
						<select name="tname" >
							<option value="NULL">CHOOSE ONE </option>
							<option value="USER_ACCOUNT" >USER_ACCOUNT</option>
							<option value="USER_ROLE">USER_ROLE</option>
							<option value="TABLES">TABLES</option>
							<option value="p_Privileges">p_Privileges</option>
							<option value="Acc_role_privilege">Acc_role_privilege</option>
							<option value="Relation_role_privilege">Relation_role_privilege</option>
						</select>
						<input type="submit" name="submit" >
				</form>
			</div>
			<div class="col-sm-12 centr"> 
				<?php
					error_reporting(E_ALL);
					ini_set('display_errors', 'On');
					if(isset($_POST['submit'])){
						$conn = oci_connect('scott', 'tiger', 'localhost/hxf7654', 'AL32UTF8');
					if (!$conn) {
						$e = oci_error();
						trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
					}
					$query = "select * from ".$_POST['tname']."";
					$s = oci_parse($conn, $query);
					if (!$s) {
						$m = oci_error($conn);
						trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
					}
					$r = oci_execute($s);
					if (!$r) {
						$m = oci_error($s);
						trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
					}
					echo "<table border='1'>\n";
					$ncols = oci_num_fields($s);
					echo "<tr>\n";
					for ($i = 1; $i <= $ncols; ++$i) {
						$colname = oci_field_name($s, $i);
						echo "  <th><b>".htmlspecialchars($colname,ENT_QUOTES|ENT_SUBSTITUTE)."</b></th>\n";
					}
					echo "</tr>\n";
					
					while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
						echo "<tr>\n";
						foreach ($row as $item) {
							echo "<td>";
							echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
							echo "</td>\n";
						}
						echo "</tr>\n";
					}
					echo "</table>\n";
					}
				?>
			</div>
		</div>
	</div>
	</body>
</html> 
