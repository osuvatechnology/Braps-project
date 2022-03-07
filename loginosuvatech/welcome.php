

<?php 

// session_start();

// include_once('includes/config.php');

// if (strlen($_SESSION['id']==0)) {

//   header('location:logout.php');

//   } else{

?>



<!DOCTYPE html>



<html lang="en">



   <head>



      <meta charset="utf-8">



      <meta name="robots" content="noindex, nofollow">



      <title>Contact Form</title>



      <meta name="viewport" content="width=device-width, initial-scale=1">



      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



	  <link href="style.css" rel="stylesheet">



      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

      <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    





   </head>

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <body >

   <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">





   <div class="login-page bk-img" >











      <div class="container contact">



         <div class="row">



            <div class="col-md-3">



               <div class="contact-info">



                  <img src="images/main-logo3.png" alt="Company Logo"/>



                  <h2>BRAPS</h2>



                  <h4>Activity Details Form:</h4>



               </div>



            </div>





            <?php 

// $userid=$_SESSION['id'];

// $query=mysqli_query($con,"select * from users where id='$userid'");





// while($result=mysqli_fetch_array($query))

// {

   

   ?>





            

            <div class="col-md-9">



               <form method="post" id="frmContactus" >



					<div class="contact-form">



					  <div class="form-group">

						   <table class="table table-bordered">

                                   <tr>

                                    <th>User Id</th>

                                       <td>0001
                                           <?php 
                                        //    echo $result['id'];
                                           ?>
                                        </td>

                                   </tr>



                                   <tr>

                                    <th>First Name</th>

                                       <td>Sandy
                                           <?php 
                                        //    echo $result['fname'];
                                           ?>
                                    </td>

                                   </tr>



                                   <tr>

                                    <th>Last Name</th>

                                       <td>Sam
                                           <?php 
                                    //    echo $result['lname'];
                                       ?></td>

                                   </tr>

                                   <tr>

                                    <th>Task Name</th>

                                       <td>Mechine Cleaning
                                           <?php 
                                    //    echo $result['lname'];
                                       ?></td>

                                   </tr>

                                   

                               

                                     

                                        <tr>

                                       <th>Date</th>

                                       <td colspan="3"><input type="date" class="form-control"  name="time1"  autocomplete="off" required >
                                    </td>
                                     

                                   </tr>

								   <tr>

                                       <th>Start Time</th>

                                       <td colspan="3">
                                           <!-- <input type="text" class="form-control" name="time2"  autocomplete="off"  required > -->
                                           <input list="Starttimes" name="Starttime" id="Starttime">
                                                    <datalist id="Starttimes">
                                                           <option value="1:00 am">
                                                           <option value="1:30 am">
                                                           <option value="2:00 am">
                                                           <option value="2:30 am">
                                                           <option value="3:00 am">
                                                           <option value="3:30 am">
                                                           <option value="4:00 am">
                                                           <option value="4:30 am">
                                                           <option value="5:00 am">
                                                           <option value="5:30 am">
                                                           <option value="6:00 am">
                                                           <option value="6:30 am">
                                                           <option value="7:00 am">
                                                           <option value="7:30 am">
                                                           <option value="8:00 am">
                                                           <option value="8:30 am">
                                                           <option value="9:00 am">
                                                           <option value="9:30 am">
                                                           <option value="10:00 am">
                                                           <option value="11:30 am">
                                                           <option value="12:00 pm">
                                                           <option value="12:30 pm">
                                                           <option value="1:00 pm">
                                                           <option value="1:30 pm">
                                                           <option value="2:00 pm">
                                                           <option value="2:30 pm">
                                                           <option value="3:00 pm">
                                                           <option value="3:30 pm">
                                                           <option value="4:00 pm">
                                                           <option value="4:30 pm">
                                                           <option value="5:00 pm">
                                                           <option value="5:30 pm">
                                                           <option value="6:00 pm">
                                                           <option value="6:30 pm">
                                                           <option value="7:00 pm">
                                                           <option value="7:30 pm">
                                                           <option value="8:00 pm">
                                                           <option value="8:30 pm">
                                                           <option value="9:00 pm">
                                                           <option value="9:30 pm">
                                                           <option value="10:00 pm">
                                                           <option value="11:30 pm">
                                                           <option value="12:00 am">

                                                    </datalist>
                                    
                                          </td>

                                   </tr>

                                   <tr>

                                    <th>End Time</th>

                                       <td colspan="3">
                                           <!-- <input type="text" class="form-control" name="time2"  autocomplete="off"  required > -->
                                           <input list="Endtimes" name="Endtime" id="Endtime">
                                                    <datalist id="Endtimes">
                                                           <option value="1:00 am">
                                                           <option value="1:30 am">
                                                           <option value="2:00 am">
                                                           <option value="2:30 am">
                                                           <option value="3:00 am">
                                                           <option value="3:30 am">
                                                           <option value="4:00 am">
                                                           <option value="4:30 am">
                                                           <option value="5:00 am">
                                                           <option value="5:30 am">
                                                           <option value="6:00 am">
                                                           <option value="6:30 am">
                                                           <option value="7:00 am">
                                                           <option value="7:30 am">
                                                           <option value="8:00 am">
                                                           <option value="8:30 am">
                                                           <option value="9:00 am">
                                                           <option value="9:30 am">
                                                           <option value="10:00 am">
                                                           <option value="11:30 am">
                                                           <option value="12:00 pm">
                                                           <option value="12:30 pm">
                                                           <option value="1:00 pm">
                                                           <option value="1:30 pm">
                                                           <option value="2:00 pm">
                                                           <option value="2:30 pm">
                                                           <option value="3:00 pm">
                                                           <option value="3:30 pm">
                                                           <option value="4:00 pm">
                                                           <option value="4:30 pm">
                                                           <option value="5:00 pm">
                                                           <option value="5:30 pm">
                                                           <option value="6:00 pm">
                                                           <option value="6:30 pm">
                                                           <option value="7:00 pm">
                                                           <option value="7:30 pm">
                                                           <option value="8:00 pm">
                                                           <option value="8:30 pm">
                                                           <option value="9:00 pm">
                                                           <option value="9:30 pm">
                                                           <option value="10:00 pm">
                                                           <option value="11:30 pm">
                                                           <option value="12:00 am">

                                                    </datalist>
                                          
                                          </td>

                                 </tr>

                                   <tr>

                                      <th>File_Upload</th>

                                      <td>  <input id="pdf" type="file" name="pdf" value="" class="form-control" required></td>

                                 </tr>
                                 

                                    </tbody>

                                </table>
                                
                                <button type="submit" class="btn btn-primary " name="submit" id="submit"> Submit</button>

                                
                                <a href="welcome.php" class="w3-button w3-yellow">Back</a>
								

                            </div>

                        </div>

					  



                        <?php 
                    // } 
                    ?>	 



					  <div class="form-group">



						 <div class="col-sm-offset-2 col-sm-10">



							

							<span style="color:red;" id="msg"></span>



						 </div>



					  </div>


				   </div>



			   </form>



            </div>



         </div>



      </div>







	</div>

   </div>
   </div>

   </body>



</html>







<?php
//  } 
 ?>

<?php



// if(isset($_POST['submit'])){

//     $amtaskdetails=$_POST['time1'];

//     $pmtaskdetails=$_POST['time2'];



// $pdf=$_FILES['pdf']['name'];

// $pdf_type=$_FILES['pdf']['type'];

// $pdf_size=$_FILES['pdf']['size'];

// $pdf_tem_loc=$_FILES['pdf']['tmp_name'];

// $pdf_store="uploads/".$pdf;





// if ($pdf_size > 10485760) {

//   echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";

// } else {





//   $userid=$_SESSION['id'];

//   $query=mysqli_query($con,"select * from users where id='$userid'");

//   while($row2=mysqli_fetch_array($query))

//   {

//       if($row2>0)

//       $usremail = $row2['email'];

//       $fname = $row2['fname'];

//       $lname = $row2['lname'];

//       $empid=$row2['id'];


//  if(isset($_POST['submit'])){
            
//   $currentDateTime = new \DateTime();
                
//  $currentDateTime->setTimezone(new \DateTimeZone('Asia/Calcutta'));
 
// $crt = $currentDateTime->format('d-m-Y H:i:s');

// $updatetime = $currentDateTime->format('d-m-Y H:i:s');



//   $qry=mysqli_query($con,"insert into taskdetails(empid,fname,lname,email,amtaskdetails,pmtaskdetails,updatetime) values('$empid','$fname','$lname','$usremail','$amtaskdetails','$pmtaskdetails','$crt')");


// $sql1=mysqli_query($con,"select * from taskdetails where email='$usremail' AND updatetime='$updatetime' ");
// while($row3=mysqli_fetch_array($sql1)){
// if($row3>0)

// 	$updatetime= $row3['updatetime'];


// 	$html="<table><tr><td>Employid</td><td>$empid</td></tr><tr><td>First Name</td><td>$fname</td></tr><tr><td>Last Name</td><td>$lname</td></tr><tr><td>Email</td><td>$usremail</td></tr>
// <tr><td>AM Taskdetails</td><td>$amtaskdetails</td></tr><tr><td>PM Taskdetails</td><td>$pmtaskdetails</td></tr>
// <tr><td>Update Time</td><td>$updatetime</td></tr></table>";

	



//    include('smtp/PHPMailerAutoload.php');



//    $mail=new PHPMailer(true);



//    $mail->isSMTP(); 



//     $mail->Host="mail35.onamae.ne.jp";

   

//    $mail->Port=587;



//    $mail->SMTPSecure="tls";



//    $mail->SMTPAuth=true;



//   $mail->Username="osuvatechi@osuvatech.jp";



//    $mail->Password="Abc@123def";



//    $mail->setFrom('osuvatechi@osuvatech.jp');



//   $mail->addAddress("osuvatech@gmail.com");

       

//    $mail->IsHTML(true);



//    $mail->Subject="Task Details From ".$fname."\"" .$usremail."\"" . "\r\n" ;



//    $mail->Body=$html;



//    $mail->SMTPOptions=array('ssl'=>array(



//        'verify_peer'=>false,



//        'verify_peer_name'=>false,



//        'allow_self_signed'=>false



//    ));



//    if($mail->send()){



//      echo "<SCRIPT> //not showing me this



//         alert('your task details form has been submitted')

//        window.location.replace('welcome.php');



//        </SCRIPT>";

       



//    }else{



//        echo "Error occur! please try again!";



//    }

// }


   




// }


// }

// }

?>















	