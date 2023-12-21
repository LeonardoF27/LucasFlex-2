<?php require "inc/cabecalho__produtos.php"; ?>

<main class="contato centraliza">

<div class="faleConosco">

<h2 class="titulos">Fale Conosco</h2>

<p class="faleConosco_Texto">Por favor, preencha o formulário abaixo para que possamos entrar em contato o mais breve possível.</p>

</div>

<div class="form">
<form action="">

<div class="campo">
<div><label for="nome" class="formLabel">Nome:</label></div>
<div><input type="text" name="nome" id="nome" placeholder="Nome completo..." class="formInput"></div>
</div>

<div class="campo">
<div><label for="email" class="formLabel">Email:</label></div>
<div><input type="email" name="email" id="email" placeholder="Seu e-mail..." class="formInput"></div>
</div>

<div class="campo">
<div><label for="telefone" class="formLabel">Celular:</label></div>
<div><input type="telefone" name="telefone" id="telefone" maxlength="14" placeholder="Seu celular..." class="formInput"></div>
</div>

<div class="campo">
<div><label for="assunto" class="formLabel">Assunto:</label></div>
<div><input type="text" name="assunto" id="assunto" placeholder="Assunto..." class="formInput"></div>
</div>

<div class="campo">
<div><label for="" class="formLabel">Mensagem:</label></div>
<div><textarea name="" id="" cols="30" rows="10" style="height:150px" placeholder="Deixe sua mensagem..." class="formInput"></textarea></div>
</div>

<div class="campo">
    <input type="submit" value="Enviar" name="enviar" id="enviar">
</div>

</form>

</div>

</main>

<?php require "inc/rodape__inicial.php"; ?>