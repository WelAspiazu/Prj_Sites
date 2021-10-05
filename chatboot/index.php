<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Receitas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img class="background" src="img/vovo.png">
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4>ChatBot Receitas da Vovó</h4>
                <br>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Mensagem...">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
     <script>
        divCpu = document.createElement("div");
        chatBody = document.querySelector(".scroller");
        divCpu.className = "bot visible";
        divCpu.innerHTML = "Olá, Digite a opção Desejada:<br><br>Receitas<br>Sobre!";
        chatBody.append(divCpu);
    </script>
</html>