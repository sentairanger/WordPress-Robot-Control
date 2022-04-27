<html>
<head>
<style>
.robot {

    padding: 16px 32px;
    display: block;
    font-size: 17px;
    background: aqua;
    border-radius: 12px;

}
</style>
</head>
<body>
<h1> WordPress Robot Buttons </h1>
<?php
     if(isset($_POST['button1'])) {
          $forward = shell_exec('sudo python /var/www/html/go-forward.py');
          echo $forward;
        }
     if(isset($_POST['button2'])) {
          $backward = shell_exec('sudo python /var/www/html/go-backward.py');
          echo $backward;
        }
     if(isset($_POST['button3'])) {
          $left = shell_exec('sudo python /var/www/html/go-left.py');
          echo $left;
        }
     if(isset($_POST['button4'])) {
          $right = shell_exec('sudo python /var/www/html/go-right.py');
          echo $right;
        }
?>
<form method="post">
<input type="submit" name="button1" class="robot" value="Forward"/>
<input type="submit" name="button2" class="robot" value="Backward"/>
<input type="submit" name="button3" class="robot" value="Left"/>
<input type="submit" name="button4" class="robot" value="Right"/>
</form>
</body>
</html>