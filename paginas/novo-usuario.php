<h1>Novo Usuario</h1>
<form action="salvar-usuario.php" method="POST">

    <input type="hidden" name="acao" value="cadastrar">
    <!-- Campo para preencher nome -->
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>

    <!-- Campo para preencher email -->
    <div class = "mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <!-- Campo para preencher senha -->
    <div class = "mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <!-- Campo para preencher data de nascimento -->
    <div class = "mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nascimento" class="form-control">
    </div>

    <!-- Campo para botao enviar-->
    <div>
        <div class = "mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>