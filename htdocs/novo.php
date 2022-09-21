<h3>Novo Usuário</h3>

<form action="?page=salvar" method="post">
    <input type= "hidden" name= "acao" value= "cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control">
    </div>
    <div class="mb-3">
        <label>Nascimento</label>
        <input type="date" name="date" class="form-control">
    </div>
    <div class="mb-3">
        <label>Sexo</label>
        <input type="text" name="sexo" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <button type= "submit" class= "btn btn-primary">Enviar</button>
    </div>
</form>