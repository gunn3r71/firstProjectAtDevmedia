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
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="container" id="box-left">
                    <h1>O que é o projeto?</h1>
                    <p>
                        Este projeto está sendo feito a partir de
                        um curso na DevMedia, cuja proposta inicial é exibir o
                        gasto médio de combustível em uma viagem, tendo como base
                        distância e o consumo de seu veículo.

                    <h3>Combustíveis aceitos para o cálculo:</h3>
                    <ul>
                        <li>Álcool</li>
                        <li>Diesel</li>
                        <li>Gasolina</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="container" id="box-right">
                    <h1>Cálculo de gasto</h1>

                    <form action="calculo.php" method="post" id="form">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Distância total em Km:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            </div>
                            <input type="text" name="distance" class="form-control" aria-label="Input responsável por receber a distância" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Consumo do veículo(KM/L):</span>
                            </div>
                            <input type="text" name="consumption" class="form-control" aria-label="Input responsável por receber consumo de combustível do veículo" aria-describedby="inputGroup-sizing-default" required>
                        </div>
                        <button type="submit" class="btn btn-lg">Calcular</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>