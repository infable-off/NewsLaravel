<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news</title>
    <link rel="stylesheet" href="../css/maincss.css">
</head>
<body style="margin: 0 auto;
        background-color: black;
        color: whitesmoke;">
<div style="
        margin: 0 auto;
        background-color: black;
        color: whitesmoke;
        width: 1024px;
        height: 100%;" class="container">

    <div style="text-align: center" class="header">

        <nav>
            <ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden; color: whitesmoke; font-size: 30px">
                <li style="float: left;">
                    <a style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;" href="/greetings">Главная</a>
                </li>

                <li style="float: left;">
                    <a style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;" href="/news">Новости</a>
                </li>

                <li style="float: left;">
                    <a style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;" href="/info">Информация о проекте</a>
                </li>

            </ul>

        </nav>



    </div>
    <div class="main">

        <h2><?=$news['title']?></h2> <br />

        <div>
            <img src="<?=$news['image']?>" />
            <p><em><?=$news['author']?></em> &nbsp; (<?=$news['created_at']?>)</p>
            <p><?=$news['description']?></p>
        </div><hr /><br />

    </div>
    <div class="footer">

    </div>



</div>
</body>
</html>
