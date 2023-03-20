<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela-login</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" async defer></script>
    <!--"700524822064-481h91l6qo6hi1uip42arc6cc8vec1a5.apps.googleusercontent.com"-->
    
</head>

<body>
    <div class="caixa__login">
        <h2>Entrar</h2>
        <form method="POST" action="logar.php" id="form1">
            <div class="caixa__login-input">
                <input id="email" name="email" type="text" required />
            <label>Email</label>
            </div>
            <div class="caixa__login-input">
                <input id="senha" name="senha" type="password" required />
                <label>Senha</label>
            </div>
            <a id="btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Acessar
            </a>
            <a>   
            <div id="g_id_onload"
                data-client_id="700524822064-481h91l6qo6hi1uip42arc6cc8vec1a5.apps.googleusercontent.com"
                data-context="signin"
                data-ux_mode="popup"
                data-login_uri="http://localhost/Nova%20pasta/"
                data-callback="retorna"
                data-auto_prompt="false">
            </div>

            <div class="g_id_signin"
                data-type="icon"
                data-shape="circle"
                data-theme="filled_black"
                data-text="signin_with."
                data-size="small">
            </div>
            </a> 
        </form>
        <?php
		  if(isset($_GET['mess'])){
			if($_GET['mess'] == 'erro'){
			   echo 
                "<script defer>window.alert('Erro de login!')</script>"
				;
			}
			if($_GET['mess'] == 'session'){
			  echo 
                "<script defer>window.alert('Usuário sem sessão!')</script>"
				;
			}
			if($_GET['mess'] == 'logout'){
			  echo 
                "<script defer>window.alert('sessão finalizada com sucesso!')</script>"
				;
			}
		  }
		?>
    </div>
    <script>
        const form = document.querySelector('#form1');
        const btn = document.querySelector('#btn');
        btn.addEventListener('click',(e)=>{form.submit()});

        function retorna(response){
            const data = jwt_decode(response.credential);
            var email = data.email;
            $.get("valida.php", {email}).done(function(resposta){
                //console.log(resposta)
                window.location = "user.php?mess=ok";
            });
        }

    </script>

</body>

</html>