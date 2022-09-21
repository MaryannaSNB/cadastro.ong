<h3>Editar Usuário</h3>

<?php

$sql = "select * from usuarios where id=" .$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=salvar" method="post">
    <input type= "hidden" name= "acao" value= "editar">
    <input type= "hidden" name= "id" value= "<?php
    print $row->id; ?>">


    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->nome; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php print $row->telefone; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Nascimento</label>
        <input type="date" name="nascimento" value="<?php print $row->nascimento; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Sexo</label>
        <input type="text" name="sexo" value="<?php print $row->sexo; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>"class="form-control">
    </div>

    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" value="<?php print $row->senha; ?>"class="form-control">
    </div>
    <div class="mb-3">
        <button type= "submit" class= "btn btn-primary">Enviar</button>
    </div>

    
  
</form>