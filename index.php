<?php
    include('../includes/header.php');
    //Colocar script de aula após essa linha
    include('menu.php');

    //Estrutura condicional/ de decisão
    if( !isset($_GET['id'])){ 
        echo "<h2>Selecione, no menu acima, o conteúdo que deseja exibir.</h2>";
    } else{
       $id = $_GET['id'];
        $file = $id.".php";
        include($file);
    }
    //

    //Nâo colocar script de aula depois dessa linha
    include('../includes/footer.php');