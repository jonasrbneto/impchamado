<?php
	require_once("validaAcesso.php");
    require_once("cabecalho.php");
    require_once("util/mostra-alerta.php");

	// Só concede acesso a essa página para usuários com nível de acesso igual e 2 ou mais
	verificaUsuario(1);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="page-header text-left">
                <h2>Cadastro de Usu&aacute;rio</h2>
            </div>

            <form id="defaultForm" method="post" class="form-horizontal" action="inserir_usuario.php">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Nome</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nome" placeholder="Nome Completo" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Login</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="login" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" placeholder="email@teste.com.br" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Senha</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="senha" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">N&iacute;vel de Acesso</label>
                    <div class="col-sm-6">
                        <div class="radio text-left">
                            <label><input type="radio" name="perfil" value="1" checked /> Administrador</label>
                        </div>
                        <div class="radio text-left">
                            <label><input type="radio" name="perfil" value="2" /> Usu&aacute;rio</label>
                        </div>
                        <div class="radio text-left">
                            <label><input type="radio" name="perfil" value="3" /> PE</label>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3  text-left">
                        <button type="submit" class="btn btn-success" name="signup" value="Sign up">Gravar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>