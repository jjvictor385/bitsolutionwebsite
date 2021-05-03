<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitSoloution - HomePage</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/waves.css">
    <script src="https://kit.fontawesome.com/c2269f3ce2.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="top">
        <div class="wrapper">
            <div class="flex">
                <div class="logo">
                    <img src="images/logo1.png">
                </div>
                <h2 class="slogan flex v">
                    A Solução Tecnológica para o seu dia a dia
                </h2>
                <div class="content-right">
					<div class="acc left">
						<label form="switch-menu" class="select-acc">
							<input type="checkbox" id="switch-menu">
							<i class="material-icons">account_circle</i>
							<?php if (isset($_SESSION['id'])) : ?>
								<span><?php echo $_SESSION['nome']; ?></span>
							<?php else: ?>
								<span>Visitor</span>
							<?php endif; ?>
							<i class="material-icons" style="transform: rotate(90deg);">chevron_right</i>
							<nav class="sub-menu">
								<?php if (isset($_SESSION['id'])) : ?>
								<p>Olá, <?php echo $_SESSION['nome']; ?>!</p>
								<?php else: ?>
								<p>Olá, visitante!</p>
								<?php endif; ?>
								<div class="flex btns">
									<?php if (isset($_SESSION['id'])) : ?>
									<a href="#" class="btn-white">Ver perfil</a>
									<a href="" class="btn">Sair</a>
									<?php else: ?>
									<a href="" class="btn-white">Registrar</a>
									<a href="" class="btn">Entrar</a>
									<?php endif; ?>
								</div>
							</nav>
						</label>
					</div>
            </div>
        </div>
        <div class="sub">
            <div class="wrapper">
                <ul class="menu flex h">
                    <li>
                        <a href="#" class="active">
                            <i class="material-icons">home</i>
                            Início
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-cogs"></i>
                            Serviços
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">contacts</i>
                            Contatos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">business</i>
                            Loja
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">store</i>
                            Criar Loja
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">lock</i>
                            Acessar loja
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">info</i>
                            Sobre a Empresa
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <input type="checkbox" id="switcher" hidden>
    <label class="switcher" for="switcher">
        <div>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </label>
    <div class="m">
        <ul class="mb">
            <li class="user_mobile">
                <i class="material-icons">account_circle</i>
            </li>
            <li>
                <a href="#" class="active">
                    <i class="material-icons">home</i>
                    Início
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cogs"></i>
                    Serviços
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">contacts</i>
                    Contatos
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">business</i>
                    Loja
                </a>
            </li>
           <li>
            <a href="#">
                    <i class="material-icons">store</i>
                    Criar Loja
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">lock</i>
                    Acessar loja
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">account_circle</i>
                    Criar conta
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">lock</i>
                    Logon
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">info</i>
                    Sobre a Empresa
                </a>
            </li>
        </ul>
    </div>
    </div>
    <section class="content-service">
        <fieldset class="caixa">
            <legend class="os">Serviços</legend>
            <div class="wrapper">
                <div class="c">
                    <ul class="box-t">
                        <li>
                            <a href="" class="waves">
                                <img src="images/manutencao.png" alt="manutencao"><br>
                                <h3>Manutenção de computadores</h3>
                            </a>
                        </li>
                        <li>
                            <a href="" class="waves">
                                <img src="images/web.png" alt="web"><br>
                                <h3>desenvolvimento web</h3>
                             </a>
                        </li>
                        <li>
                            <a href="" class="waves">
                                <img src="images/dsn.png" alt="design"><br>
                                <h3>Criação de imagens e logotipos</h3>
                            </a>
                        </li>
                        <li>
                            <a href="" class="waves">
                                <i class="material-icons big">arrow_right_alt</i><br>
                                <h3>More</h3> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </fieldset>   
    </section>
    <section class="content-info">
            <div class="wrapper ">
                <div class="c">
                    <div class="box-about">
                        <div class="info"><i class="material-icons">info</i></div>
                        <h2>Quando devo formatar meu PC?</h2>
                        <p class="p">
                        A formatação vai ajudar na eficiência de sua performance durante os trabalhos, dará uma nova “vida” para a máquina. 
                        Vai acabar com aqueles programas difíceis de desinstalar como barras de navegador e outros, vírus que estavam escondidos, etc.
                        </p>
                        <h3>Existem diversas razões para se formatar um computador, algumas delas são:</h3>
                        <img src="images/sistemas-operacionais.png" alt="S.O" title="Sistemas Operacionais" class="img">
                        <p class="p">
                            <ul class="list">
                                <li>Lentidão ao utilizar o computador;</li>
                                <li>A restauração não foi suficiente para resolver o problema;</li>
                                <li>Troca de hardwares;</li>
                                <li>Atualizações de sistema malsucedidas;</li>
                                <li>Pane geral no sistema operacional;</li>
                                <li>Infestação de vírus ou sequestros de dados;</li>
                                <li>Venda ou doação do computador para terceiros.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <section class="content-plans">
        <fieldset class="caixa">
            <legend class="os">Planos</legend>
            <div class="wrapper">
                <div class="c">
                    <div class="c">
                        <ul class="box-t-plans">
                            <li>
                                <div class="laco"></div>
                                <a href="" class="waves">
                                    <i class="material-icons">arrow_right_alt</i><br>
                                    <h3>More</h3> 
                                </a>
                            </li>
                            <li>
                                <a href="" class="waves">
                                    <i class="material-icons">arrow_right_alt</i><br>
                                    <h3>More</h3> 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </fieldset>
    </section>
    <script src="js/waves.js"></script>
</body>
</html>