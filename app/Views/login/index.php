<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>ERP Forge Sistemas</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('theme/plugins/bootstrap/css/bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css') ?>">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- Lord Icons -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <style>
        body {
            <?php if ($configuracao['arquivo-imagem-de-fundo-login'] != "") : ?>
                background: url('<?= base_url('assets/img') . "/" . $configuracao['arquivo-imagem-de-fundo-login'] ?>') no-repeat center center fixed;
                background-size: cover;
            <?php else : ?>
                background: linear-gradient(135deg, #667eea, #2e51fa);
            <?php endif; ?>
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-box {
            width: 400px;
            padding: 35px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
            text-align: center;
            margin: 20px;
        }

        .login-logo img {
            width: 220px;
        }

        .btn-custom {
            background: #2e51fa;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            transition: 0.3s;
            border-radius: 8px;
            width: 100%;
        }

        .btn-custom:hover {
            background: #253db5;
            color: #fff; /* Altera a cor do texto para branco */
        }

        .form-group label {
            font-weight: 600;
            color: #444;
            float: left;
        }

        .input-group-text {
            background: #2e51fa;
            color: #fff;
            border: none;
        }

        .input-group-text lord-icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="login-logo">
            <img src="/assets/img/login-logo.png" alt="ERP Forge Sistemas">
        </div>
        <p class="text-muted">Acesse sua conta para continuar</p>

        <form action="/login/autenticar" method="post">
            <div class="form-group">
                <label for="usuario">Usuário:</label>
                <div class="input-group">
                    <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Digite seu usuário" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <lord-icon src="https://cdn.lordicon.com/hbvyhtse.json" trigger="hover" colors="primary:#ffffff" style="width:25px;height:25px"></lord-icon>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <div class="input-group">
                    <input type="password" id="senha" class="form-control" name="senha" placeholder="Digite sua senha" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <!-- Ícone de olho que alterna a visibilidade da senha -->
                            <lord-icon id="togglePassword" src="https://cdn.lordicon.com/qnpnzlkk.json" trigger="hover" colors="primary:#ffffff" style="width:25px;height:25px"></lord-icon>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-custom mt-3">
                Acessar conta 
            </button>

            <div style="text-align: center; margin-top: 15px;">
                <a class="seguro1" style="color: #858585; font-size: 14px; margin-bottom: 5px; display: inline-block;">
                    <img class="seguro" alt="NxSistemas ERP" src="/assets/img/bloqueado.png" style="width:25px; display: block; margin: 0 auto;">
                    <br>Sistema Monitorado por IP e Registrado Coordenadas de Acesso.
                    <br> <b id="b-versao-do-sistema" style="font-size: 13px;">Versão: 1.0</b>
                </a>
            </div>

        </form>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url('theme/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000
            });

            <?php $session = session(); $alert = $session->getFlashdata('alert'); ?>
            <?php if (isset($alert)) : ?>
                Toast.fire({
                    icon: '<?= $alert['type'] ?>',
                    title: '<?= $alert['title'] ?>'
                });
            <?php endif; ?>

            // Selecione o ícone do olho e o campo de senha
            const togglePassword = document.getElementById('togglePassword');
            const senha = document.getElementById('senha');

            togglePassword.addEventListener('click', function() {
                // Alterna o tipo de campo entre 'password' e 'text'
                const type = senha.type === 'password' ? 'text' : 'password';
                senha.type = type;

                // Alterna o ícone de olho (abre ou fecha)
                if (type === 'password') {
                    togglePassword.src = "https://cdn.lordicon.com/qnpnzlkk.json"; // Olho fechado
                } else {
                    togglePassword.src = "https://cdn.lordicon.com/qnpnzlkk.json"; // Olho aberto
                }
            });
        });
    </script>
</body>

</html>
