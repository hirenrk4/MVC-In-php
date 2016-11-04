 <!DOCTYPE html>
<html>
<head>
    <title>Insert Data in MySQL using PHP MVC</title>
     <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/jquery-ui.js"></script>
     <link rel="stylesheet" href="View/jquery-ui.css">
      <script type="text/javascript" src="View/jquery-1.7.1.min.js"></script>
      <script type="text/javascript" src="View/jquery-ui-1.8.17.custom.min.js"></script>
</head>
<script>
           $(function() 
           {   $( "#date" ).datepicker({
                   changeMonth:true,
                   changeYear:true,
                   yearRange:"-100:+0",
                   dateFormat:"dd MM yy" });
           });
</script>
<center>
<body>
<?php 

 if($result){
    echo "add New Record Successfully";
 } 

?>
<h1> Registration Form </h1>    
<form action="" method="POST" enctype="multipart/form-data">
    <p>
    <label>Name</label>
    <input id="name" value="" name="name" type="text"  /><br />
    </p>

    <p>
    <label>User Name</label>
    <input id="user" value="" name="unm" type="text" required="required" /><br />
    </p>

    <p>
    <label>Password</label>
    <input id="pass" value="" name="pass" type="password" required="required" /><br />
    </p>

    <p>
    <label>Age</label>
    <input id="age" name="age" type="text" required="required" /><br />
    </p>

    <p>
    <label>City</label>
       <select name="city">
          <option value="Ahmedabad">Ahmedabad</option>
          <option value="Surat">Surat</option>
          <option value="Rajkot">Rajkot</option>
          <option value="Junagadh">Junagadh</option>
          <option value="Baroda">Baroda</option>
          <option value="Valsad">Valsad</option>
          <option value="Bhavnagar">Bhavnagar</option>
          <option value="jamnagar">Jamnagar</option>
      </select><br>
    </p>
   
    <p>
    <label>Birth Date</label>
    <input id="date" value="" name="date" type="text" required="required" /><br>
    </p>
    
    <p>
    <label>Image</label>
    <input id="date" value="" name="image" type="file" /><br>
    </p>

    <p>
    <label>Hobby</label>
    <input type="checkbox" name="Hobby[]" value="Playing">Playing 
     <input type="checkbox" name="Hobby[]" value="Traveling">Traveling  
      <input type="checkbox" name="Hobby[]" value="Reading"> Reading <br>
    </p>

    <p>
    <label>Gender</label>
    <input type="radio" name="gender" id="gender" value="male"> Male
    <input type="radio" name="gender" id="gender" value="female"> female
    </p>

  <p>

      <button type="submit"  name="submit"><span>Save</span></button> 
      <button type="reset"><span>Cancle</span></button>
  </p>
 </form>

</body>
</center>

</html>

<!-- http://developerqueries.blogspot.in/2015/10/insert-into-mysql-php-mvc.html -->
