<!DOCTYPE html>
<html lang="uz">

<?php $website_title='PHP Blog'; require_once'./blocks/head.php'?>

<body class="d-flex flex-column min-vh-100">
    <?php require 'blocks/header.php';?>
    <main class="container mt-5 flex-grow-1">
        <div class="row">
            <div class="col-md-8">
                <!-- Main content here -->
            </div>
            <?php require 'blocks/aside.php';?>
        </div>
    </main>
    <?php require 'blocks/footer.php';?>
    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
