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
        <form action="https://httpbin.org/post" method="post">
            <fieldset class='fieldset_main'>
                <legend>Форма</legend>
                <p>
                    <label>Имя пользователя<br>
                    <input type="text" name="name" id="name" required>
                    </label>
                </p>
                <p>
                    <label>e-mail<br>
                    <input type="email" name="email" id="name" required>
                    </label>
                </p>
                <fieldset class='fieldset_first'>
                    <legend>Причина обращения:</legend>
                    <label>
                        <input type="radio" name="feedbackType" value="complain">Жалоба
                    </label>
                    <label>
                        <input type="radio" name="feedbackType" value="suggestion">Предложение
                    </label>
                    <label>
                        <input type="radio" name="feedbackType" value="gratitude">Благодарность
                    </label>
                </fieldset>
                <label>Текст обращения<br>
                    <input type="text" name="text" id="name" required height="50px" width="500px">
                </label>
                <fieldset class='fieldset_second'>
                    <legend>Как с вами связаться:</legend>
                    <label>email
                        <input type='checkbox' name='answer' id="email" value="email">
                    </label>
                    <label>sms
                        <input type='checkbox' name='answer' id="sms" value="sms">
                    </label>
                </fieldset>
                <div>
                    <button type='submit'>Отправить</button>
                    <br><a href="result.php">2 страница</a>
                </div>
            </fieldset>
        </form>
    </main>
    <footer>
        <h4> 1 страница: Сверстать форму обратной связи. Отправку формы осуществить на URL: https://httpbin.org/post. Добавить кнопку для перехода на 2 страницу.</h4>
        <h4> 2 страница: вывести на страницу результат работы функции get_headers. Загрузить код в удаленный репозиторий. Залить на хостинг.</h4>
    </footer>
</body>
</html>