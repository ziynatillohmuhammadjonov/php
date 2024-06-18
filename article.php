<?php 
    if(!isset($_COOKIE['login']) ){
        header('Location: /php/reg.php');
        exit() ;
    }
?>

<!DOCTYPE html>
<html lang="uz">

<?php $website_title = 'Добавленые статьей';
require_once './blocks/head.php' ?>

<body class="d-flex flex-column min-vh-100">
    <?php require 'blocks/header.php'; ?>
    <main class="container mt-5 flex-grow-1">
        <div class="row">
            <div class="col-md-8 mb-3 mx-auto">
                <h4 class="text-center">Добавленые статьей</h4>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Введите имя">
                    </div>
                    <div class="mb-3">
                        <label for="intro" class="form-label">Интро статьи</label>
                        <textarea type="text" class="form-control" name="intro" id="intro" placeholder="Интро статьи"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label">Текс статьи</label>
                        <textarea type="text" class="form-control" name="text" id="text" placeholder="Текст статьи"></textarea>
                    </div>
                    <div class="alert alert-danger" role="alert" id="error_block">
                    </div>
                    <button type="button" class="btn btn-success" id="article_send">Добавить</button>
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
        $('#article_send').click(function () {
            var title = $('#title').val();
            var intro = $('#intro').val();
            var text = $('#text').val();
            $.ajax({
                url: './ajax/article.php',
                type: 'POST',
                cache: false,
                data: { 'title': title, 'intro': intro, 'text': text },
                dataType: 'html',
                success: function (data) {
                    if (data == 'Всё готово') {
                        $('#article_send').text('Всё готово');
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