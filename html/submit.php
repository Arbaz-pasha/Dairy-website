<?php
  if($_server['request_method']=="post")
  {

  $name=$_post['name'];
  $address=$_post['address'];
  $pid=$_post['pid'];
  $qty=$_post['qty'];

  $servername = "localhost";
  $username="root";
  $password="";
  $database="project";

  $connection= mysqli_connect( $servername,$username,$password, $database);

    if(!connection)
      {
      die("sorry failed  to connect sql");  
      }
    else{
        echo "succesfully connected";
        $sql ="INSERT INTO `customer` (`name`, `address`, `pid`, `qty`) VALUES ('a1', 'it is aadress', '008', '005');";
        #result = mysql_query($connection,$sql);
        if($result)
        {
        echo '<div class="alert alert-success alert-dismisable fade show" role="alert">
        <strong>Success!</strong> Your details are successfully submitted.
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'
        }
      else 
        {
        <div class="alert alert-success alert-dismisable fade show" role="alert">'
        <strong>Success!</strong> Your details are successfully submitted.
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>'
        } 
  }
}
?>