<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMEC | Consulta de Veículos</title>
    <link rel="stylesheet" href="./app/views/css/reset.css">
    <link rel="stylesheet" href="./app/views/css/generico.css">
    <link rel="stylesheet" href="./app/views/css/consulta-generico.css">
</head>
<body>
    <h1>Consulta de Veículos</h1>
    <div class="box-principal">
        <div class="box-secundario">
            <input type="submit" value="Realizar Consulta" class="botao-operacao">
            <table class="tabela-consulta">
                <thead class="cabecalho-tabela-consulta">
                    <tr class="linha-cabecalho-tabela-consulta">
                        <td>Placa</td>
                        <td>Modelo</td>
                        <td>Ano</td>
                        <td>Autonomia</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody class="conteudo-tabela-consulta">
                    <tr>
                        <td>BRA29A12</td>
                        <td>Strada</td>
                        <td>2009</td>
                        <td>10.5</td>
                        <td>Disponível</td>
                    </tr>
                    <tr>
                        <td>BRA65C09</td>
                        <td>Uno</td>
                        <td>2006</td>
                        <td>10.2</td>
                        <td>Disponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>