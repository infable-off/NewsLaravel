
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

        <div class="nameList">
            <p style="font-size: 25px; font-weight: bold">Актуальные новости</p>
        </div>

    </div>
    <div class="main">
{{--        <div style="border: 1px solid #ccc; border-radius: 1%; padding: 10px; margin-bottom: 20px;" class="article">--}}
{{--            <div class="headArticle">--}}
{{--                <p style="font-size: 25px; font-weight: bold">Приходите знакомиться: РСХБ Цифра на конференциях Saint Highload ++ и Saint TeamLead</p>--}}
{{--            </div>--}}

{{--            <div class="mainArticle">--}}
{{--                <p>--}}
{{--                    В конце июня в Санкт-Петербурге пройдет две крупных ИТ-конференции: Saint Highload ++ (29—30 июня) и Saint TeamLead (27—28 июня). Приглашаем всех гостей мероприятия в перерывах между докладами посетить стенд команды РСХБ-Интех. У нас вы сможете отдохнуть, поучаствовать в активностях, которые мы для вас приготовили, а также получить много приятных призов и подарков.--}}
{{--                </p>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div style="border: 1px solid #ccc; border-radius: 1%; padding: 10px; margin-bottom: 20px; " class="article">--}}
{{--            <div class="headArticle">--}}
{{--                <p style="font-size: 25px; font-weight: bold">«Ростелеком» создал безопасный репозиторий проверенных Open Source пакетов и библиотек под названием «РТК-Феникс»</p>--}}
{{--            </div>--}}

{{--            <div class="mainArticle">--}}
{{--                <p>--}}

{{--                    «Ростелеком» создал на базе своих мощностей безопасный и доверенный репозиторий проверенных и популярных Open Source пакетов и библиотек, наиболее часто используемых при разработке ПО, под названием «РТК-Феникс».--}}
{{--                </p>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
        <h2>News list</h2> <br />
        <?php foreach($newsList as $news): ?>
        <div>
            <h4><a href="<?=route('news.show', ['id' => $news['id']])?>"><?=$news['title']?></a></h4>
            <br>
            <img src="<?=$news['image']?>" />
            <p><em><?=$news['author']?></em> &nbsp; (<?=$news['created_at']?>)</p>
            <p><?=$news['description']?></p>
        </div><hr /><br />
        <?php endforeach; ?>
    <div class="footer">

    </div>



</div>
</body>
</html>


