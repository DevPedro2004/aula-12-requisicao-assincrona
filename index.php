<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora AJAX</h1>

    <pre>
    <label>Numero 01</label>
    <input type="text" name="numero1" id="numero1"/>

    <label>Numero 02</label>
    <input type="text" name="numero2" id="numero2"/>

    <button>Calcular com ajax</button>

    <p id="resutado"></p>
</pre>
<sript>
    function calcular(){
        cont numero1 = document.getElementById("numero1").value
        cont numero2 = document.getElementById("numero2").value

        fetch('/calculo.php', {
            mehod:  'POST' ,
            headers: { 'Content=Type': 'application/json'};
            body: JSON.stringfy({
                numero1: parseFloat(numero1),
                numero2: parseFloat(numero2)
            })
        })
        .then(resposta => resposta.json())
        .then(dados =>{

            document.getElementById("resultado").innerHTML =
                "Soma: " + dados.soma;0
        })
        .catch(erro =>{
            document.getElementById("resultado").innerHTML =
            "Erro ao processar";
        });
    }




</body>
</html>