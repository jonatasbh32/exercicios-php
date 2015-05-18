<?php


$alunos = array(       0=>  array("Nome"=> "Paulo", "nota" => 10),
                       1=>  array("Nome"=> "Pedro", "nota"=> 5),
                       2=>  array("Nome"=> "João",  "nota"=> 6),
                       3=>  array("Nome"=> "Jardel", "nota"=> 7),
                       4=>  array("Nome"=> "Wesley", "nota"=> 0),
                       5=>  array("Nome"=> "Alfredo","nota"=> 5),
                       6=>  array("Nome"=> "Arthur", "nota"=> 10),
                       7=>  array("Nome"=>  "Rita",  "nota"=> 4),
                       8=>  array("Nome"=>  "Maya",  "nota"=> 7),
                       9=>  array("Nome"=>  "Walter", "nota"=> 4),
                       10=>  array("Nome"=>  "Wary", "nota"=> 7),
                       11=>  array("Nome"=>  "Neila", "nota"=> 5),
                       12=>  array("Nome"=>  "ryth", "nota"=> 4),
                       13=>  array("Nome"=>  "Walr", "nota"=> 2),
                       14=>  array("Nome"=>  "ryan", "nota"=> 10),
                       15=>  array("Nome"=>  "hudson", "nota"=> 10),
                       16=>  array("Nome"=>  "Bruno", "nota"=> 10),
                       17=>  array("Nome"=>  "Marcos", "nota"=> 7),
                       18=>  array("Nome"=>  "Uira", "nota"=> 4),
                       19=>  array("Nome"=>  "Simone", "nota"=> 8),
                       20=>  array("Nome"=>  "Alderite", "nota"=> 7)


);


$total = count($alunos);
$i = 0;

For($i=0; $i< $total; $i++){
	$aluno = $alunos[$i];

  if($alunos[$i]["nota"] < 6 ){
    echo "<b><font color='#FF0000'>Nome do Aluno: </b> ".$alunos[$i]["Nome"]."</font><br/>";
    echo "<b><font color='#FF0000'>Media Final:</b> ".$alunos[$i]["nota"]."</font><br><br>";

  } else{

    echo "<b><font color='#0000FF'>Nome do Aluno: </b> ".$alunos[$i]["Nome"]."</font><br/>";
    echo "<b><font color='#0000FF'>Media Final:</b> ".$alunos[$i]["nota"]."</font><br><br>";
  }

	
}


?>


