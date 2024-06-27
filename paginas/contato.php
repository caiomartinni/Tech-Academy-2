<div class="container text-center">
    <h1>ENTRE EM CONTATO COM O DESENVOLVEDOR</h1>

    <form class="formulario-contato" name="conta" action="contato" method="POST">
        <label for="nome">Nome</label> <br>
        <input type="text" required placeholder="Digite seu nome">
        <br>
        <label for="email">Email</label> <br>
        <input type="email" for="email" name="email" id="email" placeholder="exemplo@dominio.com" required> 
        <br>
        <label for="mensagem">Mensagem</label> <br>
        <textarea for="mensagem" placeholder="Digite sua mensagem" required></textarea>
        <br>
        <button type="submit">
            <i class="bi bi-send-fill"></i>
            Enviar
        </button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"] ?? NULL;
      
    function mensagem($msg){
      echo "<script>alert('{$msg}');history.back();</script>";
    };

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      mensagem("Endereço de e-mail inválido");
    };
};
?>