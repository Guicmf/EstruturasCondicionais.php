<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
    <pre>
    <?php
    echo "** Estruturas Condicionais **\n";

    echo "IF\n";

    $idade = 10;
    if ($idade >= 65){
        echo "É idoso. \n";
    } else if ($idade >= 18) {
        echo "É maior de idade. \n";
    } else if ($idade >= 12) {
        echo "É adolescente. \n";
    } else if ($idade >= 3) {
        echo "É criança. \n";
    } else {
        echo "É bebê. \n";
    }

    echo "-------------------- \n";
    echo "Swift \n";

    $mes = 12;
    $dias = 0;

    switch ($mes) {
        case 1:
            $dias = 31;
            echo "Janeiro \n";
            break;
        case 2:
            $dias = 28;
            echo "Fevereiro \n";
            break;
        case 3:
            $dias = 31;
            echo "Março \n";
            break;
        case 4:
            $dias = 30;
            echo "Abril \n";
        case 5:
            $dias = 31;
            echo "Maio \n";
        case 6:
            $dias = 30;
            echo "Junho \n";   
        case 7:
            $dias = 31;
            echo "Julho \n";    
        case 8:
            $dias = 31;
            echo "Agosto \n";
        case 9:
            $dias = 30;
            echo "Setembro \n";  
        case 10:
            $dias = 31;
            echo "Outubro \n";     
        case 11:
            $dias = 30;
            echo "Novembro \n";
        case 12:
            $dias = 31;
            echo "Dezembro \n";        
            break;
        default:
            echo "Mês inexistente. \n";
        break;    
    }

    echo "-------------------- \n";
    echo "** Estruturas Condicionais **\n";

    echo "While\n";

    $contador = 0;

    while ($contador < 10) {
        echo "Contando: ", $contador, "\n";
        $contador++;
    } 

    echo "-------------------- \n";
    echo "Do while\n";

    $contador = 0;

    do {
        echo "Contando: ", $contador, "\n";
        $contador++;
    } while ($contador < 10);

    echo "-------------------- \n";
    echo "** Estruturas Condicionais **\n";

    echo "For\n";

    for ($contador = 0 /*primeira a ser executada, nunca mais repetida*/; $contador < 10 /*terceiro a ser executada*/; $contador++ /*segundo a ser executada*/) { 
        echo "Contando: ", $contador, "\n";
    }

    ?>
    </pre>
</body>
</html>