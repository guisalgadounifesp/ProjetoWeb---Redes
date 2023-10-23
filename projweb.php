<!DOCTYPE html>
<html>
<head>
    <title>Site PROJ 2</title>
    <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        h2 {
            font-size: 15px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Site do Projeto 2 de Redes de Computadores</h1>
        <h2>O objetivo deste site é apresentar um conteúdo dinâmico, de maneira que os itens mudem a cada requisição.</h2>
    </header>

    <div id="data_hora"></div>
    <br> 
    <div id="num_aleatorio"></div>
    <br>
    <div id="ip_aleatorio"></div> 

    <script>

	function octeto() {
            return Math.floor(Math.random() * 256);
        } 

        function datahora() {
            const DataHoraElement = document.getElementById('data_hora');
            const DataHoraAtual = new Date();
            const DataHoraFormatada = DataHoraAtual.toLocaleString();
            DataHoraElement.innerHTML = `Data e Hora: ${DataHoraFormatada}`;
        }

        function randnum() {
            const randnum = Math.floor(Math.random() * 100); // Gera um número 
            const randnumElement = document.getElementById('num_aleatorio');
            randnumElement.innerHTML = `Número Aleatório: ${randnum}`;
        }

        function randIP() {
            const randIP = `${octeto()}.${octeto()}.${octeto()}.${octeto()}`;
            const randIPElement = document.getElementById('ip_aleatorio');
            randIPElement.innerHTML = `IP Aleatório: ${randIP}`;
        }

        setInterval(datahora, 100000); 
        datahora(); 
        randnum(); 
        randIP(); 
    </script>
</body>
</html>
