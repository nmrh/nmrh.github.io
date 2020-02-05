 <?php include_once('../GatePass/Include/Header.php');
// require '../GatePass/Class/DbConnect.php';
?>
<br><br>
<link href="css/reg.css" rel="stylesheet" media="all">
<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Gate Pass Apply Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <span class="label label-default">Insert your photo</span>
                            <input type="file" name="image" id="image"></input>                    
                        </div> 
                        <br>
                        <div class="row">
                            <span class="label label-default">Name</span>
                            <input type="text" class="form-control input" id="name" name="name" aria-describedby="namehelp" placeholder="Enter your full name" required>                      
                        </div>  
                        <br>
                        <div class="row">
                            <span class="label label-default">Address</span>
                            <input type="text" class="form-control input" name="address" id="address" aria-describedby="addresshelp" placeholder="Enter your address" required>                      
                        </div>  
                             
                        <br>
                        <div class="row">
                            <td>
                            <span class="label label-default">Gender</span>
                            <div class="p-t-15 col">
                               
                               <label class="radio-container m-r-55">
                                   <input type="radio" name="gender" value="male">Male<br>
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="radio-container">
                                    <input type="radio" name="gender" value="female">Female 
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            </td>
                        </div> 
                        <br>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Email</span>
                            <input type="email" class="form-control input" name="email" id="email" aria-describedby="email" placeholder="Enter your email">                      
                        </div>  
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Contact numbers</span>
                            <div class="col">
                                <input type="phone" class="form-control input" name="mobile" id="mobtel" aria-describedby="mobtel" placeholder="Mobile" required>                      
                            </div>
                            <div class="col">
                                <input type="phone" class="form-control input" name="office" id="oftel" aria-describedby="oftel" placeholder="Office">                      
                            </div>
                        </div> 
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Date</span>
                            <input type="date" class="form-control input" name="dob" id="dob" aria-describedby="email" placeholder="Enter your email" required>                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">NIC number</span>
                            <input type="text" class="form-control input" name="nic" id="nic" aria-describedby="nic" placeholder="Enter your NIC number" required maxlength="10">                      
                        </div>
                        <br>
                                             
                        
                        <br>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" value="submit" name="submit">Submit</button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    
    $connect=mysqli_connect("localhost","root","","gatepass");
       if(isset($_POST["submit"]))
       {
           $file=  addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
           $name=$_POST["name"];
            $address=$_POST["address"];
            $gender=$_POST["gender"];
            $email=$_POST["email"];
            $mobile=$_POST["mobile"];
            $office=$_POST["office"];
            $dob=$_POST["dob"];
            $nic=$_POST["nic"];
            $sql="INSERT INTO applications(Image,Name,Address,Gender,Email,Mobile,Office,Date,NIC) VALUES('$file','$name','$address','$gender','$email','$mobile','$office','$dob','$nic') ";

           if(mysqli_query($connect,$sql)){
               echo'<script>alert("Your application was successfully submitted")</script>';
           }
           else {
           
                  
            $to_email = 'rumalinmrh@gmail.com';
            $subject = 'New gate pass request';
            $message = 'You have received a new gate pass requst';
            $headers = 'From:rumalinmrh@gmail.com';
            mail($to_email,$subject,$message,$headers);

               
        die("Error:{$connect->errno}:{$connect->error}");
        } 
         $connect->close();
       }

       
        

        
       

    ?>

<?php include_once('../GatePass/Include/Footer.php'); ?>