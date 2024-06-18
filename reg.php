<!DOCTYPE html>
<html lang="uz">

<?php $website_title = 'Регистрация сайта';
require_once './blocks/head.php' ?>

<body class="d-flex flex-column min-vh-100">
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5 flex-grow-1">
        <div class="row">
            <div class="col-md-8 mb-3 mx-auto">
                <h4 class="text-center">Форма регистрация</h4>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ваше имя</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Введите email">
                    </div>
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
                    <button type="button" class="btn btn-success" id="reg_btn">Зарегистрироват</button>
                </form>

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
        $('#reg_btn').click(function () {
            var name = $('#name').val();
            var email = $('#email').val();
            var login = $('#login').val();
            var pass = $('#pass').val();
            $.ajax({
                url: './reg/reg.php',
                type: 'POST',
                cache: false,
                data: { 'name': name, 'email': email, 'login': login, 'pass': pass },
                dataType: 'html',
                success: function (data) {
                    if (data == 'Всё готово') {
                        $('#reg_btn').text('Всё готово');
                        $('#error_block').hide();
                    }else{
                        $('#error_block').show();
                        $('#error_block').text(data);
                    }
                }
            });
        });
    </script>
</body>

</html>