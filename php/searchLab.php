<?php
  session_start();
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: *');
  $con= mysqli_connect('localhost', 'root', '', 'emr' );

  if(isset($_GET['labid']))
  {
    $labid = $_GET['labid'];
    $query= "select * from lab where Id='$labid'";
    $result= mysqli_query($con, $query);
    if(mysqli_num_rows($result)>0)
    {
      $row=mysqli_fetch_array($result);
      $data[] = array("Name"=>$row['Name'], "Username"=>$row['Username'], "RegNo"=>$row['RegNo']);
    }
    echo json_encode($data);
  }

 ?>
