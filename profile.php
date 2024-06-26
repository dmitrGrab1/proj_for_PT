<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Грабовец Д.П.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css\style.css">
    
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                    <div class="col-9">
                        <div class="nav_text">Информация обо мне!</div>
                    </div>
        </div>


    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="col-10">
                    <h2>Меня зовут Грабовец Дмитрий, родился и обучаюсь в небольшом наукограде Дубна. 
                        Решил связать сферу своей деятельности с информационной безопасностью после появления соответствующих дисциплин в университете. 
                        В свободное от учебы время занимаюсь спортом.</h2>
                </div>
            </div>
        
            <div class="col-6">
                <div class="row my_photo"></div>
                <div class="row title_photo"><p>Грабовец Д.П.</p></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class=" button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
            </div>
            <div class="col-12">
                <h1 class="hello">
                    <form method="POST" action="profile.php">
                        <input type="text" class="form" type="text" name="title" placeholder="Заголовок поста">
                    </form>
            </div>
            <div class="col-12">
                <textarea style="margin-top: 20px; width: 1500px" name="text" cols="30" rows="10" placeholder="Введите текст поста ..."></textarea>
            </div>
            <div class="col-12">
                <button style="margin-top: 20px" type="submit" class="btn_red" name="submit">Сохранить пост!</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="col-10">
                    <h2>Маринованные огурчики «Дядя Ваня» – традиционная овощная закуска, идеально сочетающаяся с разными русскими блюдами. Продукция изготавливается из кубанских грунтовых отборных огурцов: сочных, хрустящих и обладающих приятным сладковатым привкусом.</h2>
                </div>
            </div>

            <div class="col-6">
                <div class="row vanya_photo"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/button.js"></script>

</body>
</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');


if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $main_text = $_POST['text'];
    echo "ok";
    if(!$title || !$main_text) die("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if(!mysqli_query($link, $sql)) die("Не удалось добавить пост");
}
?>