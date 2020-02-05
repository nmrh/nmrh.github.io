<?php include('./Include/Header.php'); 
 require '../GatePass/Class/DbConnect.php';
?>
<br><br>
<style>
    .search{
        margin-left: 100px;
        margin-top: 50px;
    }
</style>
<div class="container">

<div class="float-xl-right">
        <form action="Admin.php">
        <button class="btn btn-secondary" name="logout" href="Guest.php" action=>Log out</button>
        </form>
    </div>
    <h1 class="mt-4 mb-3">Welcome</h1>
<br><br>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a>Home  </a>
      </li>
      <li class="">
      <a href="Register.php"> /  Apply for a gate pass
      </li>
    </ol>

    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <table class="table table-bordered table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Approved</th>
                        
                        
                    </tr>
                    
                    <?php
                    require './Class/DbConnect.php';
                    $sql1="SELECT applications.Name,approve.Approve FROM applications right join approve on applications.App_ID=approve.App_ID";
                    $result=$conn->query($sql1);
                    
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            
                            echo "<tr><td>".$row["Name"]."</td><td>".$row["Approve"]."</td></tr>";
                           
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
        <br><br>
    
  </div>
</div>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
<div class="search">
    <a>Search for the approved gate passes</a>
     
        <form method="post">
            <div class="row">
                <span class="label label-default">NIC</span>
                <input type="text" class="form-control input" name="NIC" id="NIC" aria-describedby="addresshelp" placeholder="Enter your NIC" required>                      
            </div>  
            
            <div class="row">
                <span class="label label-default">Name</span>
                <input type="text" class="form-control input" name="Name" id="Name" aria-describedby="addresshelp" placeholder="Enter your name" required>                      
            </div> 
            
            <div class="row">
                <span class="label label-default">Date</span>
                <input type="date" class="form-control input" name="Date" id="Date" aria-describedby="addresshelp" placeholder="Enter your date" required>                      
            </div>
            <br>
            
            <div>
                <button class="btn btn--radius-2 btn--red" type="search" value="search" name="search">search</button>
            </div> 
            
            <?php
    
    $connect=mysqli_connect("localhost","root","","gatepass");
       if(isset($_POST["search"]))
       {
           
           $NIC=$_POST["NIC"];
            $Name=$_POST["Name"];
            $Date=$_POST["Date"]; 
            
$sql12="SELECT applications.Name,applications.NIC,applications.Date, approve.Approve FROM applications right join approve on applications.App_ID=approve.App_ID where applications.NIC='$NIC' and applications.Name='$Name' applications.'$Date";
if(mysqli_query($connect,$sql12)){
               echo'<script>alert("Your application was successfully submitted")</script>';
           }
           else {
           
               
        die("Error:{$connect->errno}:{$connect->error}");
        } 
         $connect->close();
       }

       
        

        
       

    ?>
            
        </form>
      
    </div>
            </di></div>
</div>


<br><br><br><br>
<?php include('./Include/Footer.php'); ?>