<?php

include_once('includes/config.php');

?>



<html>



<head>

    <title> Resume Folders</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>







<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>



<link href="css/bootstrap.min.css" rel="stylesheet">



    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

</head>

    <style>



.header1 ul

{

float:right;

margin-top:25px;

}

       

      .headerFont{

        font-family: 'Ubuntu', sans-serif;

        font-size: 24px;

      }



      .subFont{

        font-family: 'Raleway', sans-serif;

        font-size: 14px;

        

      }

      

      .specialHead{

        font-family: 'Oswald', sans-serif;

      }



      .normalFont{

        font-family: 'Roboto Condensed', sans-serif;

      }

    </style>

<body>



<div class="container">

  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse

    " role="navigation">

      <div class="container">

       

        <div class="header1">



          <a href="activity.php" class="navbar-brand headerFont text-lg"><strong>Task Details</strong></a>

                      

        

          

          <a href="welcome.php"  class="btn btn-danger navbar-right navbar-btn"><strong>Back</strong></a>

          

         

  

    </div>

         

      </div> 

    </nav>

    </div>

    <br>

    <div id="container" >



      <div class="row">

        

        

        <div class="col-md-12" >

        <h4>Managed Files</h4>

        <div class="table-responsive" >



                

              <table id="mytable" class="table table-bordred table-striped">

                   

                   <thead>

                   

                   <th>sno</th>

                   <th>First Name</th>

                   <th>Last Name</th>

                   <th>Task name</th>

                   <th>Task Date</th>

                   <th>Start Time</th>
                   <th>End Time</th>


                   

                   <th>Updated Time</th>



                    </thead>

    <tbody>

       <?php

    //    $cnt=1;

    // $query="SELECT * FROM pdf_file";



    // $qry=$con->query($query);

    // while($rst = mysqli_fetch_assoc($qry)){



        

      

    //     $Sys_id = $rst['id'];

    //     $fname = $rst['fname'];

    //     $lname = $rst['lastname'];

    //     $emailid = $rst['emailid'];

    //     $pdf = $rst['pdf'];

    //     $updatetime = $rst['UpdateTime'];

        

        ?>



    <tr>

    <td>1<?php 
    // echo $cnt;
    ?></td>

    

    <td>Sandy<?php 
    // echo $fname;
    ?></td>

    <td>Sam<?php
    //  echo $lname;
     ?></td>

    <td>Mechine Cleaning<?php
    //  echo $emailid;
     ?></td>
     <td>Task Date<?php 
    // echo $pdf;
    ?></td>
      <td>Start time<?php 
    // echo $pdf;
    ?></td>

    <td>End time<?php 
    // echo $pdf;
    ?></td>

    <td>Posted time
        <?php 
    // echo $updatetime;
    ?></td>

    <!-- <td><p data-placement="top" data-toggle="tooltip" title="download"><a href="uploads/<?php echo $pdf;?>" class="download_link"><span class="glyphicon glyphicon-download"></span></a></p></td> -->

    </tr>

    

   

    <?php

//     $cnt=$cnt+1; 
//  }

      ?>

   

    

   

    

    </tbody>

        

   </table>



    

            </div>

            

        </div>

    </div>

</div>

