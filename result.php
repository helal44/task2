
     <!DOCTYPE html>
     <html lang="en">
     <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="./stlye.css" rel="stylesheet" >
      <title>Result</title>
     </head>
     <body>
      
     <table class=" table ">
      <thead>
        <th>f_name</th>
        <th>l_name</th>
        <th>userName</th>
        <th>password</th>
        
      </thead>
      <tbody>

      <?php

        $file=fopen('data.txt','r');
        if($file){
        while(($line=fgets($file))!== false){
          $data=unserialize($line);
          ?>
          <tr>
            <td><?php echo $data['f_name'] ?></td>
            <td><?php echo $data['l_name'] ?></td>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
           
            
          </tr>
          
          <?php
          
          
        };
       
        fclose($file);
        }
        else{
          echo'no data in text file';
        }
        ?>

      </tbody>
     </table>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>   
     </body>
     </html>