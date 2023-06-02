<?php 
 $errors=array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./stlye.css" rel="stylesheet" >
    <title>task1</title>
</head>
<body>
<div class="container">
<div class="row  justify-content-center ">
    <div class="col-2"></div>

    <?php
   
   if($_SERVER['REQUEST_METHOD']=='POST' ){
       $f_name=$_POST['f_name'];
       $l_name=$_POST['l_name'];
       $userName=$_POST['username'];
       $password=$_POST['password'];

       if(empty($f_name)){
           $errors['f_name']='enter first name';
         
       
       }
       elseif(empty($l_name)){
           $errors['l_name']='enter last name';
          
       }
       elseif(empty($userName)){
           $errors['username']='enter username ';
          
       }
       elseif(empty($password)){
           $errors['password']='enter password';
         
       }
       else{
           $file=fopen('data.txt','a+');
           $data=array('f_name'=>$f_name,'l_name'=>$l_name,'username'=>$userName,'password'=>$password);
           fwrite($file,serialize($data)."\n");
           fclose($file);
           header('Location:./result.php');
           exit();
       }
     

}

?>

  <div class="col-8  p-2 bg-light my-5">
  <form   method="post" >

    <h4 class="text-center">Enter your Data</h4>
        <div class="elm">
           
            <label for="">firstName</label>
            <input type="text" name="f_name" placeholder="enterfisrtname name">
          
            <div class="text-danger" ><?php   echo $errors['f_name']; ?></div>
         

        </div>
        <div class="elm">
            <label for="">lastName</label>
            <input type="text" name="l_name" placeholder="enter last name">
            <div  class="text-danger" ><?php   echo $errors['l_name']; ?></div>
        </div>
        <div class="elm">
            <label for="">addres</label>
           <textarea name="address"  cols="30" rows="10"></textarea>
        </div>
        <div class="elm" >
            <label for="">country</label>
          <select name="country"  >
            <option value="egypt">egypt</option>
            <option value="algeria">algerai</option>
            <option value="sudan">sudan</option>
            <option value="syria">syria</option>
          </select>
        </div>

        <div class="elm ">
            <label for="">gender</label>
           <span>male:  <input type="radio" value="male" name="gender"></span>
           <span>female:  <input type="radio" value="female" name="gender"></span>
        </div>

        <div class="elm">
            <label for="">skills</label>
           <span>php:  <input type="checkbox" value="php" name="skills[]"></span>
           <span>html:  <input type="checkbox" value="html" name="skills[]"></span>
           <span>css:  <input type="checkbox" value="css" name="skills[]"></span>
           <span>javascript:  <input type="checkbox" value="javascript[]" name="skills[]"></span>
           <span>nod:  <input type="checkbox" value="node" name="skills[]"></span>
           <span>mongo:  <input type="checkbox" value="mongo" name="skills[]"></span>
        </div>
        <div class="elm">
            <label for="">username</label>
            <input type="text" name="username" placeholder="user name">
            <div class="text-danger" ><?php   echo $errors['username']; ?></div>
        </div>
        <div class="elm">
            <label for="">password</label>
            <input type="password" name="password" placeholder=" password">
            <div class="text-danger" ><?php   echo $errors['password']; ?></div>
        </div>
        <div class="elm">
            <label for="">department</label>
            <input type="text" name="department" placeholder="department">
        </div>
        <div class="elm">
           <h6>please inser that code :h3j4js32</h6>
            <input type="text" name="code" placeholder="enter code here ..">
        </div>

        <div>
            <input type="submit" value="submit"  class="btn btn-primary my-3" name="submit">
        </div>


    </form>


  

    <div class="col-2"></div>
  </div>   
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>