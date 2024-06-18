<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/php/index.php" class="d-inline-flex link-body-emphasis text-decoration-none h3">
                PHP blog
            </a>
        </div>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-dark text-decoration-none" href="/php">Главная</a>
            <?php
            if(isset($_COOKIE['login']) &&$_COOKIE['login']!=''){
                echo'<a class="me-3 py-2 text-dark text-decoration-none" href="/php/article.php">Добавит статью</a>';
            }
            ?>
            <!-- <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
            <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
            <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a> -->
        </nav>
        <?php
        if (!isset($_COOKIE['login']) || $_COOKIE['login'] == ''):
            ?>
            <div class="col-md-3 text-end">
                <a href='/php/auth.php' type="button" class="btn btn-outline-primary me-2">Войти</a>
                <a href='/php/reg.php' type="button" class="btn btn-primary">Регистрация</a>
            </div>
            <?php
        else:
            ?>
            <div class="col-md-3 text-end">
                <a href='/php/auth.php' type="button" class="btn btn-primary">Личний кабинет</a>
            </div>
            <?php
        endif
        ?>
    </header>
</div>