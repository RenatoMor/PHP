<?php 
$estudante=array(
    "ra"=>123456,
    "nome"=>"Jubileu",
    "curso"=>"TADS",
    "Semestre"=>3
);
    echo "<pre>";print_r($estudante);echo"</pre><hr>";

    foreach($estudante as $pos=>$valor){
    echo "$pos: <br><b>$valor</b><br><hr>";
        
    echo $pos=$valor;

    }
    

?>