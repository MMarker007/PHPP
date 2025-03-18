<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_lab2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <img class='header_logo' src='./img/mospolytech_logo.png' alt='Логотип'>
        <h2>Feedback Form</h2>
        <h2>Гришин Максим</h2>
    </header>
    <main>
        <?php 
            $result = get_headers("https://httpbin.org/post");
            echo "<p>";
                print_r($result);
            echo "</p>";
        ?>
    </main>
    <footer>
        <h4> 1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу.</h4>
        <h4> 2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.</h4>
    </footer>
</body>
</html>