

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 45%;
            justify-content: center;
            margin: auto;

        }
        input{
            margin: 1%;
            border: 2px solid black;
            padding: 1.4%;
            font-size: 1.2rem;
        }
        button{
            background-color: rgb(169, 209, 255);
            color: black;
            padding: 2%;
           
        }
        h1, h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>
        Validação de dados de formulário com PHP
    </h1>
    <form action="processar_cadastro.php" id="form" method="POST">
        <input type="text" name="nome" placeholder="Insira seu nome" id="nome">
       <input type="email" name="email" placeholder="Insira seu email" id="email">
       <input type="password" name="senha" placeholder="Insira sua senha" id="senha">
       <input type="password" name="confirmasenha" placeholder="Confirme sua senha" id="confirmasenha">
       <button type="submit" id="botaodeenviar">Enviar</button>
    </form>
        <h2 id="mensagem"></h2>
    <script>
        let botaodeenviar = document.getElementById("botaodeenviar")
        let form = document.getElementById("form")
       
        let mensagem = document.getElementById("mensagem")


        botaodeenviar.addEventListener('click', (event) =>{
            let nome = document.getElementById("nome").value
            let email = document.getElementById("email").value
            let senha = document.getElementById("senha").value
            let confirmasenha = document.getElementById("confirmasenha").value
           


            if(nome == "" && email == ""){
    mensagem.innerText = "O nome e o email estão vazios, preencha-os, por favor."
    event.preventDefault()
}

            else  if(email == "" ){
    mensagem.innerText = "O email está vazio, preencha-o, por favor."
    event.preventDefault()
}
else if(nome == "" ){
    mensagem.innerText = "O nome está vazio, preencha-o, por favor."
    event.preventDefault()
}
else if(senha == "" && confirmasenha == ""){
    mensagem.innerText = "Preencha a senha e confirme-a, por favor."
    event.preventDefault()
}

else  if(senha == "" ){
    mensagem.innerText = "A senha está vazia, preencha-a, por favor."
    event.preventDefault()
}
else if(confirmasenha == "" ){
    mensagem.innerText = "Confirme a senha, por favor."
    event.preventDefault()
}

 else if(senha != confirmasenha){
                mensagem.innerText = "As senhas estão diferentes"
                event.preventDefault()
        }   
        else if (senha == confirmasenha){
            mensagem.innerText = "Parabéns, as senhas estão iguais!"
        }

        })
      
    </script>
</body>
</html>