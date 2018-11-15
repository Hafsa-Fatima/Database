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

	<form action=""  method="post">
		<div class="container">
			<div class="row">
                <div class=col-sm-12>
                    <span class="bolt centr">3.1 Add information about a new USER_ACCOUNT in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					USER_NAME : <input type="text" name="username">	
                    USER_NUMBER : <input type="number" name="uno">
                    PHONE:<input type="text" name="phone">
                </div>
                <div class="col-sm-12 centr">
                    ROLE:<select name="role1" >
						<option value="NULL">CHOOSE ONE </option>
                        <option value="NULL">NULL</option>
                    <?php
                        $queryselect1="select role_no,Name from user_role";
                        querySelect($queryselect1);
                    ?>
                    </select>
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit1" >
                    <?php
                        if(isset($_POST['submit1'])){
                            // echo $_POST['role1'];
                            $query1="insert into user_account values (".$_POST['uno'].",'".$_POST['username']."','".$_POST['phone']."',".$_POST['role1'].")";
                            if(queryFunction($query1)){
                                echo "<div class="."success".">Sucessfully inserted new User_Account</div>";
                            }
                            else{
                                echo "<div class="."fail".">Failure</div>";
                            }	
                        }
                    ?>
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.2 Add information about a new USER_ROLE in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					ROLE NAME : <input type="text" name="rname">	
                    ROLE_NUMBER : <input type="number" name="role_no1">
                    DESCRIPTION : <input type="text" name="des">
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit2" >
                        <?php
                            if(isset($_POST['submit2'])){
                                $query2="insert into user_role values (".$_POST['role_no1'].",'".$_POST['rname']."','".$_POST['des']."')";
                                if(queryFunction($query2)){
                                    echo "<div class="."success".">Sucessfully inserted new User_Role</div>";
                                }
                                else{
                                    echo "<div class="."fail".">Failure</div>";
                                }	
                            }
                        ?>
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.3 Add information about a new TABLES in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					TABLE NAME : <input type="text" name="tname">	
                    USER_ID : <input type="number" name="user_id">
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit3" >
                        <?php
                            if(isset($_POST['submit3'])){
                                $tname=$_POST['tname'];
                                $user_id=$_POST['user_id'];
                                $query3="insert into tables values ('".$tname."',".$user_id.")";
                                if(queryFunction($query3)){
                                    echo "<div class="."success".">Sucessfully inserted new table</div>";
                                }
                                else{
                                    echo "<div class="."fail".">Failure</div>";
                                }	
                            }
                        ?>
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.4 insert a new PRIVILEGE, including the privilege type in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					PRIVILEGE NAME : <input type="text" name="pname4">	
                    PRIVILEGE_NO : <input type="number" name="pno4">
                    PTYPE: <select name="ptype" >
                                <option value="">CHOOSE ONE </option>
                                <option value="Account" >Account</option>
                                <option value="Relation" >Relation</option>
						    </select>
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit4" >
                        <?php
                            if(isset($_POST['submit4'] )){
                                if(!empty($_POST['pno4']) and !empty($_POST['pname4']) and !empty($_POST['ptype'])){
                                    $query4="insert into p_Privileges values (".$_POST['pno4'].",'".$_POST['pname4']."','".$_POST['ptype']."')";
                                    if(queryFunction($query4)){
                                        echo "<div class="."success".">Sucessfully inserted new privilege</div>";
                                    }
                                    else{
                                        echo "<div class="."fail".">Failure</div>";
                                    }	
                                }
                                else{
                                    echo "<div class="."fail".">Enter all values</div>";
                                }
                            }
                        ?>
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.5 Relate an USER_ACCOUNT to a ROLE in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					USER_ID : <input type="NUMBER" name="user5">	
                    ROLE:<select name="rno5" >
                            <option value="NULL">CHOOSE ONE </option>
                            <option value="NULL">NULL</option>
                            <?php
                                $queryselect5="select role_no,Name from user_role";
                                querySelect($queryselect5);
                            ?>
                        </select>
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit5" >
                        <?php
                            if(isset($_POST['submit5'] )){
                                if(!empty($_POST['user5']) and !empty($_POST['rno5'])){
                                    $query5="update user_account set role=".$_POST['rno5']." where user_id=".$_POST['user5'];
                                    if(queryFunction($query5)){
                                        echo "<div class="."success".">Sucessfully updated user_account </div>";
                                    }
                                    else{
                                        echo "<div class="."fail".">Failure</div>";
                                    }	
                                }
                                else{
                                    echo "<div class="."fail".">Enter all values</div>";
                                }
                            }
                        ?>     
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.6 Relate an ACCOUNT_PRIVILEGE to a ROLE in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					ROLE : <select name="role6" >
                                <option value="NULL">CHOOSE ONE </option>
                                <option value="NULL">NULL</option>
                                <?php
                                    $queryselect5="select role_no,Name from user_role";
                                    querySelect($queryselect5);
                                ?>
                            </select>	
                    PRIVILEGE : <select name="pno6" >
                                    <option value="NULL">CHOOSE ONE </option>
                                    <option value="NULL">NULL</option>
                                    <?php
                                        $queryselect5="select privilege_no,privilege_col from p_Privileges";
                                        querySelect($queryselect5);
                                    ?>
                                </select>
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit6" >
                        <?php
                            if(isset($_POST['submit6'] )){
                                if(!empty($_POST['role6']) and !empty($_POST['pno6'])){
                                    $query6="insert into acc_role_privilege values (".$_POST['role6']." ,".$_POST['pno6'].")";
                                    if(queryFunction($query6)){
                                        echo "<div class="."success".">Sucessfully inserted in Acc_role_privilege </div>";
                                    }
                                    else{
                                        echo "<div class="."fail".">Failure</div>";
                                    }	
                                }
                                else{
                                    echo "<div class="."fail".">Enter all values</div>";
                                }
                            }
                        ?> 
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.7 Relate a RELATION_PRIVILEGE, ROLE, and TABLE in form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					PNO : <input type="text" name="pno7">	
                    TNAME : <input type="number" name="tname7">
                    USER_ID :  <input type="number" name="user_id7">      
                    ROLE : <input type="number" name="role7">
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit7" >
                        <?php
                        
                        ?>
                </div>
                <div class=col-sm-12>
                    <span class="bolt centr">3.8 retrieve all privileges associate with a particular ROLE, and all privileges associated with a particular USER_ACCOUNT form and submit</span> 
                </div>
                <div class="col-sm-12 centr ">
					ROLENO : <input type="number" name="tname6">
                </div>	
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit8" >
                </div>
                <div class="col-sm-12 centr">
                    USER_ID : <input type="number" name="user_id7">
                </div>
                <div class="col-sm-12 centr">
                    <input type="submit" name="submit9" >
                </div>
			</div>
		</div>
	</form>
    <?php
			//error_reporting(E_ALL);
            //ini_set('display_errors', 'On');
            //connection
            function connectionOpen(){
                $conn = oci_connect('scott', 'tiger', 'localhost/hxf7654', 'AL32UTF8');
                if (!$conn) {
                    $e = oci_error();
                    //trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                    return FALSE;
                }
                else{
                    return $conn;
                }
            }

            //query function
            function queryFunction($query){
                if(!connectionOpen()){
                    return FALSE;
                }
                else{
                    $conn=connectionOpen();
                    $s = oci_parse($conn, $query);
                    if (!$s) {
                    $m = oci_error($conn);
                    echo "parse error";
                    //trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
                    return FALSE;
                    }
                    $r=oci_execute($s);
                    if(!$r){
                        $m = oci_error($s);
                        trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
                        return FALSE;
                    }
                    else{
                        return TRUE;
                    }
                }
                oci_free_statement($s);
                oci_close($conn);
            }


            function querySelect($query){
                $conn=connectionOpen();
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
                while (($row = oci_fetch_array($s, OCI_BOTH)) != false) {
                    // Use the uppercase column names for the associative array indices
                    echo '<option value='.$row[0].'>'.$row[1] . ' </option>\n';
                    //echo $row[1] . "<br>\n";
                }
                oci_free_statement($s);
                oci_close($conn);
            }

	?>
	</body>
</html> 
