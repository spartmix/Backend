<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="register.php" method="POST">
		<label>Name:<input type="text" name="user"></label><br>
		</label>Email<input type="email" name="mail"></label><br>
		<input type="submit" name="send" value="Registrar">
	</form>
<br>
<br>

<!-- Concatenação -->
<!-- Para concatenar usa o 'ponto' .  -->
 	<?php
        $name1 = 'Eder';
        $name2 = 'Deivid';
        echo $name1 . ' ' . $name2;
        //Eder Deivid
    ?>
<br>

<!-- Function-->
	<?php
        function myName($name)
        {
            echo $name;
        }
        myName('Eder');
        // Eder
    ?>
<br>

<!-- Operadores -->
	<?php

        $a=2;
        $a++;
        //$a = $a + 1
        echo $a . '<br>';
        // 3

        $b = 3;
        $b += 50;
        //$b = 3 + 50
        echo $b . '<br>';
        //53

        $d = 15;
        $c = 12;
        $c += $d;
        //$c = $c + $d
        //$c = 12 + 17
        echo $c;
        //27

    ?>

<br>
<br>

<!-- Array -->
<strong>Simple Array example:</strong>
<br>
	<?php
        $names = array('Eder', 'Deivid', 'Teste', 'Seila');
        echo $names[0];
        //Deivid
    ?>

<br>
<br>

<!-- Array multiplo -->
<strong>Array 'table':</strong>
<br>
	<?php
        $cadastros = array(
            'names' => array('Eder', 'Deivid', 'Teste'),
            'age' => array('18', '17', '16'),
            );
        echo $cadastros['age'][2];
        //16
    ?>
<br>
<br>

<!-- IF e else-->
<strong>If and Else</strong>
<br>
	<?php
        $var1 = 28;
        $var2 = 20;
        if ($var1 > $var2) {
            echo 'Mensagem if';
        } else {
            echo 'Mensagem else';
        }
        //Mensagem Else


    ?>
<br>
<br>

<!-- If else + Elseif-->
<strong>IF, else and Elseif:</strong>
<br>
	<?php
        $cond1 = 3;
        $cond2 = 3;
        if ($cond1 < 3) {
            echo 'O valor é menor que 3';
        } elseif ($cond2 == $cond1) {
            echo 'O valor da variavel 1 é igual ao valor da variavel 2';
        } else {
            //NUNCA USAR ISTO
            echo 'As condições não foram true em nenhuma das condições acima';
        }
        //As condições não foram true em nenhuma das condĩções acima.
    ?>
<br>
<br>

	<!-- USAR ISSO AO INVES DE ELSE -->
	<?php
            $cond1 = 3;
            $cond2 = 5;
            $text1= 'As condições não foram true em nenhuma das condições acima';
            if ($cond1 < 3) {
                $text1 = 'O valor é menor que 3';
            }
            if ($cond2 == $cond1) {
                $text1 =  'O valor da variavel 1 é maior que o valor da variavel 2';
            }
                echo $text1 . '<br>';
            // NUNCA USAR ELSE
            //As condições não foram true em nenhuma das condĩções acima.
        ?>

<!-- Laços FOR -->
<strong>For:</strong>
<br>
	<?php
        $result = '';
        $name = 'Eder';
        for ($i=0; $i < strlen($name); $i++) {
            $result .= $name[$i];
        };
        echo $result;
    ?>
<br>
<br>

<!-- FOREACH //FOR para arrays. -->
<strong>Foreach:</strong>
<br>
	<?php
        $peoples = array('Eder', 'Deivid', 'Others', 'Seila');
        foreach ($peoples as $names) {
            echo $names .'<br>';
        //Eder, Deivid, Others, Seila
        }
    ?>
<br>
<br>


<?php
        $text = array('Eder', 'Deivid', 'Others', 'Seila');
        foreach ($text as $resultado => $value) {
            echo $resultado . '=>' . $value .'<br>';
        //Eder, Deivid, Others, Seila
        }
    ?>

<br>
<br>
<!-- Switch case (Look like IF and Else)-->
<!-- Default is used if no matchs found-->
<strong>Switch, Case:</strong>
<br>
	<?php
        $today = 'Mon';
        switch ($today) {
            case 'Mon':
                echo 'Today is Monday';
                break;
            case 'Tue':
                echo 'Today is Tuesday';
                break;
            case 'Wed':
                echo 'Today is Wednesday';
                break;
        //Caso o dia não seja nenhum dos 'existentes', vai cair nesse default aqui
            default:
                echo 'Invalid day';
                break;
        //Today is monday
        }
    ?>
<br>
<br>
<!--Calling Functions-->
<strong>Calling Functions</strong>
<br>
	<?php
        function myFunction($name)
        {
            echo $name;
        }
        myFunction('Eder');
        //Eder
    ?>
<br>
<br>
<!--Calling Functions with Return-->
<strong>Calling Functions with 'return'</strong>
<br>
	<?php
        function myFunctions($num1, $num2)
        {
            $sum = $num1 * $num2;
            return 'Seu resultado é ' . $sum;
        }
        // 20
        echo myFunctions(4, 5);
    ?>
<br>
<br>
<strong>Var dump</strong>
<br>
	<?php
        $value = 5.3;
        var_dump($value)
        //Valor da variavel e tipo
        //Float 5.3
    ?>
<br>
<br>


</body>
</html>

