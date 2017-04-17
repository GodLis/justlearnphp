<?php include_once("header.php");
session_destroy();
?>

    <div class="mypadding" style="text-align: justify">

        <div class="h1" style="text-align: center">
            Виведення тексту на екран. Оператор echo.
        </div>
        <div>
            <p>Коли потрібно відобразити текст на веб-сторінці, то оператор echoє найбільш вживаним оператором в PHP. Як
            його іcпользовать - після слова echoпотрібно помістити рядок тексту в лапки:
            </p>
            <code>
                &lt;?php echo 'Привет от PHP'; ?>
            </code>
            <p>
            Відображення в браузері:
            </p>
            <blockquote>
                Привет от PHP
            </blockquote>
            <p>
            Для відображення тексту можна використовувати як подвійні лапки, так і одинарні.
            Для чисел лапки можна не використовувати:
            </p>
            <code>
                &lt;?php echo 2016; ?>
            </code>
            <p>
            Оператор echo також може брати участь у форматуванні веб-сторінки:
            </p>
            <code>
                &lt;?php echo 'Петров Иван<br>Родился<br>...'; ?>
            </code>
            <p>
            Відображення в браузері:
            </p>
            <blockquote>
                Петров Иван<br>
                Родился<br>
                ...
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Синтаксис HEREDOC
        </div>
        <div>
            <p>
            Для відображення великої кількості тексту використовують т. Н. синтаксис heredoc. Він починається з
            символів <<< , після яких може бути записаний довільний ідентифікатор. Після наявного тексту варто вказати
            той самий ідентифікатор, що і на початку коду:
            </p>
            <code>
                &lt;?php<br>
                echo <<<END<br>
                <p>Для отображения большого <br> количества текста используют<br>
                синтаксис heredoc</p>
                END;<br>
                ?>
            </code>
            <p>
                Відображення в браузері:
            </p>
            <blockquote>
                Для отображения большого
                количества текста используют синтаксис heredoc
            </blockquote>
        </div>

        <div class="h1" style="text-align: center">
            Коментарі в скриптах
        </div>
        <div>
            <p>
                Коментарі потрібні для опису написаного скрипта. Вони потрібні, якщо скрипт розробляється довгий час, або
                розробляється кількома особами, то неможливо запам'ятати всю структуру програми не залишаючи опис в
                коментарях.
            </p>
            <p>
                У PHP існує 3 типи коментарів.
            </p>
            <p><b>Перший</b> дозволяє розміщувати коментарі в декількох рядках. Починається такий тип коментарів з
                символів
                /*і закінчуються */, наприклад:
            </p>
            <code>
                &lt;?php<br>
                /* Тут может быть размещен любой текст,<br>
                даже в несколько строк */<br>
                ?>
            </code>
            <p>
                Слід мати на увазі, що вкладені коментарі не припустимі. Такий код викличе помилку:
            </p>
            <code>
                &lt;?php<br>
                /* Тут может быть размещен любой текст, <br>
                /*даже в */<br>
                несколько строк */<br>
                ?>
            </code>
            <p>
                Наступні два типи є однорядковими. Такі коментарі починаються з символів //або #і тривають до кінця
                рядка. приклад:
            </p>
            <code>
                &lt;?php<br>
                // Тут может быть размещен любой текст<br>
                # Только в одной строке !<br>
                echo "Привет Всем !";<br>
                ?>
            </code>
        </div>

        <div class="h1" style="text-align: center">
            Змінні в PHP
        </div>
        <div>
            <p>
                PHP створений не тільки для форматування статичного тексту. Для того, щоб обробляти різні дані були
                придумані <b>змінні</b> . Змінна - контейнер c даними. Кожна змінна містить певне значення.
            </p>
            <p>
                Синтаксис змінної складається з знака долара - $ і "вільного" ідентифікатора якому
                присвоюється якесь значення. наприклад:
            </p>
            <code>
                &lt;?php<br>
                $name = "Виктор";<br>
                ?>
            </code>
        </div>

        <div class="row-fluid" style="text-align: center">
            <div class="span12">
                <div class="row-fluid">

                    <div class="span6 btn btn-link">
                        <a href="tutorialFirst.php">
                            <button type="button">
                                <div class="glyphicon glyphicon-arrow-left"></div> Попередня сторінка
                            </button>
                        </a>
                    </div>

                    <div class="span6 btn btn-link">
                        <a href="begin.php">
                            <button type="button" >
                                Наступна сторінка <div class="glyphicon glyphicon-arrow-right"></div>
                            </button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>

<?php include_once("footer.php");