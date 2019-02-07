
<html>
    <head>
        <meta charset="UTF-8">
        <link href="newcss.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>
    <body>
        <form class=" caixageral" method="post" action="newphp.php">     
            <div class="caixas">
                Valor1: <input class="caixa1" type="number" step="0.1" name="Valor1"/> 
                Valor2: <input class="caixa2"  type="number" step="0.1" name="Valor2"/> <br/>
            </div>
            <div class="operacao">   <select class="operacao" name="operacao">
                    <option class="soma">Somar </option>
                    <option class="sub">Subtrair</option>
                    <option class="mul">Multiplicar</option>
                    <option class="div">Dividir</option>
                </select>
            </div>
            
                <input class="Resultado" type="submit" value="Resultado">
            
            

        </form>
    </body>
</html>
