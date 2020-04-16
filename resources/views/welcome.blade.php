<?php 
 



$command = escapeshellcmd('C:\Users\sahraoui\Desktop\myscript.py');
$output = shell_exec($command);
echo $output;





 ?>