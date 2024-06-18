<!DOCTYPE html>
<html lang="uz">

<?php $website_title = 'Авторизация сайта';
require_once './blocks/head.php' ?>

<body class="d-flex flex-column min-vh-100">
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5 flex-grow-1">
        <div class="row">
            <div class="col-md-8 mb-3 mx-auto">
                <?php
                if (!isset($_COOKIE['log']) || $_COOKIE['log'] == ''):
                ?>
                    <h4 class="text-center">Форма авторизация</h4>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="login" class="form-label">Логин</label>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Пароль</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите парол">
                        </div>
                        <div class="alert alert-danger" role="alert" id="error_block">
                        </div>
                        <button type="button" class="btn btn-success" id="auth_btn">Войти</button>
                    </form>
                    <?php
                else:
                    ?>
                    <h1><?= $_COOKIE['log'] ?></h1>
                    <button class="btn btn-danger" id="exit_btn">Выйти</button>
                    <?php
                endif;
                ?>

            </div>
            <?php require 'blocks/aside.php'; ?>
        </div>
    </main>
    <?php require 'blocks/footer.php'; ?>
    <script src="/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $('#auth_btn').click(function () {
            var login = $('#login').val();
            var pass = $('#pass').val();
            $.ajax({
                url: './ajax/auth.php',
                type: 'POST',
                cache: false,
                data: { 'login': login, 'pass': pass },
                dataType: 'html',
                success: function (data) {
                    if (data == 'Всё готово') {
                        $('#auth_btn').text('Всё готово');
                        $('#error_block').hide();
                        document.location.reload()
                    } else {
                        $('#error_block').show();
                        $('#error_block').text(data);
                    }
                }
            });
        });
        $('#exit_btn').click(function () {
            $.ajax({
                url: './ajax/exit.php',
                type: 'POST',//kerak emas
                cache: false,
                data: {},
                dataType: 'html',
                success: function () {
                    document.location.reload();
                }
            });
        });
    </script>
</body>

</html>