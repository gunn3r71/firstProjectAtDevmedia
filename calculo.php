

<?php
    $html = "<div class='container' id='result'>";
    if($_POST) {
        $distance = $_POST['distance'];
        $consumption = $_POST['consumption'];

        if(is_numeric($distance) && is_numeric($consumption)){
            if($distance > 0 && $consumption > 0) {
                $valorGasolina = 4.36;
                $valorDiesel = 4.46;
                $valorAlcool = 4.05;
                $calculoGasolina = number_format(($distance / $consumption) * $valorGasolina,2,',','.');
                $calculoDiesel = number_format(($distance / $consumption) * $valorDiesel,2,',','.');
                $calculoAlcool = number_format(($distance / $consumption) * $valorAlcool,2,',','.');
                $html .= '<table class="table table-dark table-stripped">
                          <thead>
                            <tr>
                              <th scope="col">Gasolina</th>
                              <th scope="col">Diesel</th>
                              <th scope="col">Alcool</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>';
                $html .= "<td>R$".$calculoGasolina."</td>";
                $html .= "<td>R$".$calculoDiesel."</td>";
                $html .= "<td>R$".$calculoAlcool."</td>";
                $html .= '</tr>
                            <tr><td colspan="3"><a href="./index.php" role="button" id="voltar" class="btn btn-md">Refazer calculo</a></td></tr>
                          </tbody>
                        </table>';
                $html .= "</div>";
                $html .= "</div>";
                $html .= "</div>";
            } else {
                $html.="<h1>Não é possível realizar o cálculo</h1><p>os valores inseridos são menores ou iguais a zero</p>";
                $html.='<a href="./index.php" role="button" id="message-back" class="btn-link">Refazer calculo</a></div>';
            }
        } else {
            $html.="<h1>Valores inválidos</h1><p>Os valores informados não são numéricos</p>";
            $html.='<a href="./index.php" role="button" id="message-back" class="btn-link">Refazer calculo</a></div>';
        }
    } else {
        $html.="<h1>Erro</h1><p>Não existem dados para realizar o cálculo</p>";
        $html.='<a href="./index.php" role="button" id="message-back" class="btn-link">Refazer calculo</a></div>';
    }

?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="assets/css/index.css" rel="stylesheet">
    <title>Projeto DevMedia PHP</title>
</head>
<body>
    <?php
        echo $html;
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
