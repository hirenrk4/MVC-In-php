<?php

 Class Model{

   

  public function Model()
  {
   $con = mysql_connect("localhost","root","mysql123") or die('Not connected to Database<br>' . mysql_error());
   mysql_select_db("mvc_db",$con) or die('Not Select Database' . mysql_error());
  }

  function delete_customer() {
  
    $qry = "DELETE FROM table1
              WHERE id = '$id'";
        $db->exec($query);
}


  public function insert_data()
  {
    
   if (isset($_POST['submit'])) 
  {
    $name = $_POST['name'];
    $unm =  $_POST['unm'];
    $pass = $_POST['pass'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $date = $_POST['date'];
    $hobby = implode(",", $_POST['Hobby']) ;
    $gender = $_POST['gender']; 
    $target_dir = "uploads/";
    $target_file = $target_dir.$_FILES["image"]["name"];
    $img = $_FILES["image"]["name"];
   

    try 
    {
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        
          //echo "The file  has been uploaded.";
    } 
    catch (Exception $e) 
    {
        echo $e;
    }
    
    $qry = "insert into table1 (name,username,password,age,city,date,image,hobby,gender) values('$name','$unm','$pass','$age','$city','$date','$img','$hobby','$gender')";
   

    $result = mysql_query($qry);
      if ($result) 
      {
        return 1;

      }
      else
      {
       return 0;

      }
   }
       else
       {
        return 0;
       }
  }

    public function select_data()
    {
        $qry = "select * from table1";

         $select = mysql_query($qry);

         return $select;
    }
}

?>
<!--  Created By hiren -->
