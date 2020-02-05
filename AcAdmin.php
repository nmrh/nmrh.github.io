<?php include('./Include/Header.php');
exit;
require '../GatePass/Class/DbConnect.php';
?>
<br><br>
<style>
    .btn{
        color: black;
        width: 100px;
    }
</style>
<div class="container">
    <br>
    <div class="float-xl-right">
        <form action="Admin.php">
        <button class="btn btn-secondary" name="logout" href="AdminReg.php" action="AdminReg.php">Log out</button>
        </form>
    </div>
    <h1 class="mt-4 mb-3">WELCOME</h1>
    
<br><br>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a>Gate Pass Requests</a>
      </li>
      <li class="breadcrumb-item active">Approve</li>
      
    </ol>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">List of Requests</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                <table class="table table-bordered table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Office</th>
                        <th>Date</th>
                        <th>NIC</th>
                        <th></th>
                    </tr>
                    
                    <?php
                    require './Class/DbConnect.php';
                    $sql1="SELECT * FROM applications";
                    $result=$conn->query($sql1);
                    
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            
                            echo "<tr>"?><td><img src="data:image/jpeg;base64,'.base64_encode($row['Image']).'"/></td><?php
                                echo"<td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["Gender"]."</td><td>".$row["Email"]."</td><td>".$row["Mobile"]."</td><td>".$row["Office"]."</td><td>".$row["Date"]."</td><td>".$row["NIC"]."</td><td><button class='btn btn-link' value='Approve' name='Approve'>".'Approve'."</button></td><td><button class='btn btn-link' value='cancel' name='cancel'>".'Cancel'."</button></td></tr>";
                           
                        }
                        echo "</table>";
                    }
                    else{
                        echo "0 result";
                    }
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
      </div>
      <?php

require '../GatePass/Class/DbConnect.php';

if (isset($_POST["Approve"])){
$Approve=$conn->real_escape_string($_POST['Approve']);

$query="INSERT INTO admin(Admin_UserName,Admin_Password) VALUES('$uname','$pword') ";
$insert=$conn->query($query);

}
else {
    echo "<h1>Check your password again</h1>";
//    die("Error:{$conn->errno}:{$conn->error}");
} 


$conn->close();
?>
      
    </div>

  </div>


<br><br><br><br>
<?php include('./Include/Footer.php'); ?>