UF<select name="uf">
    
<?php
$uf=array("SP","RJ","MG","ES","RS","MT","TO","AM");
sort($uf);
foreach($uf as $x){
    echo "<option value='$x'>$x</option>";
}
?>
</select><br>