<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="container">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
              <div class="form-group">
                <label for="sayi">Sayı Girin:</label>
                <input type="text" class="form-control" name="sayi">
              </div>
              <button type="submit" name="kontrol" class="btn btn-default" >ÇALIŞTIR</button>
            </form>
        </div>
        
        <div class="container">
            <?php
                
              
                
              
               

            if(isset($_POST["kontrol"]))
            {
 
                $sayi=$_POST["sayi"];

                for($i=0; $i<=$sayi;$i++)
                {

                   
                 for($j=1;$j<=$i;$j++)
                 {
                    echo "*";
                 }
                 echo "<br>";
                }
            }
           
            ?>
       </div>

<body>
</body>
</html>