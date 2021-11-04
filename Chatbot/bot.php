<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Chatbot in PHP</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="title">Online Chatbot</div>
            <div class="form">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="msg-header">
                        <p>Olá , como posso te ajudar ?</p>
                    </div>    
                </div>

                
            </div>
            <div class="typing-field">
            <div class="input-data">
                    <input id="texto" type="text" placeholder="Escreva Sua Mensagem Aqui..." required>
                    <button id="send-btn">Enviar</button>
            </div> 
            </div>  
        </div>
    </body>
</html>