<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Вступне тестування
    </div>
    <div class="h3 text-info" style="text-align: center">
        <b>
            Примітка!
        </b>
        <p>
            На кожне запитання лише один вірний варіант відповіді!
        </p>
    </div>

    <form action="begineertestbackend.php" method="post">
        <fieldset>
            <ol>
                <li>
                    <label>
                        Який результат виконання наступного коду?
                    </label>
                    <blockquote>
                        &lt;php><br>
                        $a = 500;<br>
                        $b = 200;<br>
                        <br>
                        echo $a %2 *$b;<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q1" value="Синтаксична помилка">
                        Синтаксична помилка
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="100">
                        100
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="500">
                        500
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="200">
                        200
                    </label>
                    <label class="radio">
                        <input type="radio" name="q1" value="0">
                        0
                    </label>
                </li>
                <li>
                    <label>
                        Яким буде масив $b після виконання даного коду?
                    </label>
                    <blockquote>
                        &lt;php><br>
                        $a = array{1, 3, 5};<br>
                        $b = array{2, 4, 6};<br>
                        $b += $a;<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q2" value='$b = array{2, 4, 6, 1, 3, 5}'>
                        $b = array{2, 4, 6, 1, 3, 5};
                    </label>
                    <label class="radio">
                        <input type="radio" name="q2" value='$b = array{2, 4, 6}'>
                        $b = array{2, 4, 6}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q2" value='$b = array{1, 2, 3, 4, 5, 6}'>
                        $b = array{1, 2, 3, 4, 5, 6}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q2" value='$b = array{3, 7, 11}'>
                        $b = array{3, 7, 11}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q2" value="Виникне помилка">
                        Виникне помилка
                    </label>
                </li>
                <li>
                    <label>
                        Що буде результатом виконання наступної конструкції в PHP 5.3?
                    </label>
                    <blockquote>
                        &lt;php><br>
                        $var = "Hello World";<br>
                        echo $var ?: "Goodbye World";<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q3" value="Hello World">
                        Hello World
                    </label>
                    <label class="radio">
                        <input type="radio" name="q3" value='Goodbye World'>
                        Goodbye World
                    </label>
                    <label class="radio">
                        <input type="radio" name="q3" value='Синтаксична помилка'>
                        Синтаксична помилка
                    </label>
                </li>
                <li>
                    <label>
                        Що виведе наступнйи код?
                    </label>
                    <blockquote>
                        &lt;php><br>
                        for ($i = 0; $i <5; $i++) {<br>
                            if ($i == 2) break; <br>
                            print ++$i;<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q4" value="1">
                        1
                    </label>
                    <label class="radio">
                        <input type="radio" name="q4" value='0'>
                        0
                    </label>
                    <label class="radio">
                        <input type="radio" name="q4" value='13'>
                        13
                    </label>
                    <label class="radio">
                        <input type="radio" name="q4" value='Повідомлення про помилку'>
                        Повідомлення про помилку
                    </label>
                </li>
                <li>
                    <label>
                        Є наступнйи код. Що потрібно вдікоректувати в третьому рядку, щоб він виконувався без помилок?
                    </label>
                    <blockquote>
                        &lt;php><br>
                        $newfile = fopen("path/to/new/file/mydata.txt", "a+");<br>
                        fwrite($newfile ++, "This is a new file.");<br>
                        fclose($newfile);<br>
                        echo "All done";<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q5" value="Прибрати ++">
                        Прибрати ++
                    </label>
                    <label class="radio">
                        <input type="radio" name="q5" value='Замінити ++ на =='>
                        Замінити ++ на ==
                    </label>
                    <label class="radio">
                        <input type="radio" name="q5" value='Замінити ++ на +='>
                        Замінити ++ на +=
                    </label>
                    <label class="radio">
                        <input type="radio" name="q5" value='Видалити параметр "This is a new file."'>
                        Видалити параметр "This is a new file."
                    </label>
                    <label class="radio">
                        <input type="radio" name="q5" value='Замінити ++ на &&'>
                        Замінити ++ на &&
                    </label>
                </li>
                <li>
                    <label>
                        Яка функція PHP добавляє тег &lt;br> біля кожного символу переводу рядку в деякій змінній
                        рядкового типу даних?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q6" value="strip_tags()">
                        strip_tags()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q6" value='convert()'>
                        convert()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q6" value='htmlentities()'>
                        htmlentities()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q6" value='nl2br()'>
                        nl2br()
                    </label>
                </li>
                <li>
                    <label>
                        Який тип даних не дозволений в PHP?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q7" value="string">
                        string
                    </label>
                    <label class="radio">
                        <input type="radio" name="q7" value='integer'>
                        integer
                    </label>
                    <label class="radio">
                        <input type="radio" name="q7" value='float'>
                        float
                    </label>
                    <label class="radio">
                        <input type="radio" name="q7" value='char'>
                        char
                    </label>
                    <label class="radio">
                        <input type="radio" name="q7" value='array'>
                        array
                    </label>
                    <label class="radio">
                        <input type="radio" name="q7" value='object'>
                        object
                    </label>
                </li>
                <li>
                    <label>
                        Яка функція реєструє глобальну змінну в межах одної сесії(PHPSESSID)?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q8" value="session_register()">
                        session_register()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q8" value='session_static()'>
                        session_static()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q8" value='global'>
                        global
                    </label>
                    <label class="radio">
                        <input type="radio" name="q8" value='session_global()'>
                        session_global()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q8" value='Нічого із вище перерахованого'>
                        Нічого із вище перерахованого
                    </label>
                </li>
                <li>
                    <label>
                        Який результат виконання наступного коду?
                    </label>
                    <blockquote>
                        $a = 10;<br>
                        echo "Value of a = $a";
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q9" value="Value of a = $a">
                        Value of a = $a
                    </label>
                    <label class="radio">
                        <input type="radio" name="q9" value='Value of a = 10'>
                        Value of a = 10
                    </label>
                    <label class="radio">
                        <input type="radio" name="q9" value='Не визначено'>
                        Не визначено
                    </label>
                    <label class="radio">
                        <input type="radio" name="q9" value='Синтаксична помилка'>
                        Синтаксична помилка
                    </label>
                </li>
                <li>
                    <label>
                        Що буде на екрані в результаті виконання наступного коду?
                    </label>
                    <blockquote>
                        &lt;?php><br>
                        $str = "\n\t\x44";<br>
                        echo strlen('$str');<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q10" value="4">
                        4
                    </label>
                    <label class="radio">
                        <input type="radio" name="q10" value='8'>
                        8
                    </label>
                    <label class="radio">
                        <input type="radio" name="q10" value='5'>
                        5
                    </label>
                    <label class="radio">
                        <input type="radio" name="q10" value='3'>
                        3
                    </label>
                </li>
                <li>
                    <label>
                        Яким буде результат?
                    </label>
                    <blockquote>
                        &lt;?php><br>
                        $str1 = "Hello World!";<br>
                        $str2 = "str1";
                        echo $$str2;<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q11" value="str1">
                        str1
                    </label>
                    <label class="radio">
                        <input type="radio" name="q11" value='Код не скомпілюється'>
                        Код не скомпілюється
                    </label>
                    <label class="radio">
                        <input type="radio" name="q11" value='Hello World!'>
                        Hello World!
                    </label>
                    <label class="radio">
                        <input type="radio" name="q11" value='String'>
                        String
                    </label>
                </li>
                <li>
                    <label>
                        Яка функція шукає останнє входження символу в рядок?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q12" value="strpos()">
                        strpos()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q12" value='strtr()'>
                        strtr()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q12" value='substr()'>
                        substr()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q12" value='strrpos()'>
                        strrpos()
                    </label>
                </li>
                <li>
                    <label>
                        Яка із наступних функцій в PHP не відноситься до файлових?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q13" value="fopen()">
                        fopen()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q13" value='fclose()'>
                        fclose()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q13" value='fwrite()'>
                        fwrite()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q13" value='fgets()'>
                        fgets()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q13" value='fappend()'>
                        fappend()
                    </label>
                </li>
                <li>
                    <label>
                        Які значення будуть в масиві $a після виконання?
                    </label>
                    <blockquote>
                        &lt;?php<br>
                        $a = array(1, 2, 3);<br>
                        foreach ( $a as $key => &$value ) {<br>
                            $value = 1;<br>
                        }<br>
                        $value = 2;<br>
                        ?>
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q14" value="2,1,1">
                        2,1,1
                    </label>
                    <label class="radio">
                        <input type="radio" name="q14" value='1,1,1'>
                        1,1,1
                    </label>
                    <label class="radio">
                        <input type="radio" name="q14" value='1,1,2'>
                        1,1,2
                    </label>
                    <label class="radio">
                        <input type="radio" name="q14" value='2,2,2'>
                        2,2,2
                    </label>
                </li>
                <li>
                    <label>
                        Що буде виведено після виконання наступного фрагменту коду?
                    </label>
                    <blockquote>
                        $operation = "+";<br>
                        $a = 66;<br>
                        $b =13;<br>
                        <br>
                        switch ($operation) {<br>
                            default : $c = 0;<br>
                            case "+" : $c = $a + $b;<br>
                            case "-" : $c = $a - $b;<br>
                        }<br>
                        <br>
                        echo $c;
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q15" value='Виникне помилка виконання сценарію'>
                        Виникне помилка виконання сценарію
                    </label>
                    <label class="radio">
                        <input type="radio" name="q15" value='53'>
                        53
                    </label>
                    <label class="radio">
                        <input type="radio" name="q15" value='0'>
                        0
                    </label>
                    <label class="radio">
                        <input type="radio" name="q15" value='null'>
                        null
                    </label>
                    <label class="radio">
                        <input type="radio" name="q15" value="79">
                        79
                    </label>
                </li>
                <li>
                    <label>
                        Чому із цього потрібно слідувати при роботі з базою даних для передбачення SQL-ін'єкцій?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q16"
                               value='Екранувати всі спеціальні символи перед тим як вставляти дані в SQL-запит'>
                        Екранувати всі спеціальні символи перед тим як вставляти дані в SQL-запит
                    </label>
                    <label class="radio">
                        <input type="radio" name="q16"
                               value='Для збереження всих строкових даних в базі використовувати тільки колонки типу
                               VARCHAR'>
                        Для збереження всих строкових даних в базі використовувати тільки колонки типу VARCHAR
                    </label>
                    <label class="radio">
                        <input type="radio" name="q16" value='Пропускати всі дані із форми через функцію urlencode()'>
                        Пропускати всі дані із форми через функцію urlencode()
                    </label>
                    <label class="radio">
                        <input type="radio" name="q16"
                               value='Використовувати хеш SHA1 на всі дані, перш ніж додавати їх в базу'>
                        Використовувати хеш SHA1 на всі дані, перш ніж додавати їх в базу
                    </label>
                    <label class="radio">
                        <input type="radio" name="q16"
                               value="Оброблювати функцією addclashes() всі дані, що отримані з бази">
                        Оброблювати функцією addclashes() всі дані, що отримані з бази
                    </label>
                </li>
                <li>
                    <label>
                        Якщо Ви хочите передати значення функції за посиланням, то вірним рішенням буде:
                    </label>

                    <label class="radio">
                        <input type="radio" name="q17" value='function ModifyReport($Rptfile){}'>
                        function ModifyReport($Rptfile){}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q17" value='function ModifyReport(&$Rptfile){}'>
                        function ModifyReport(&$Rptfile){}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q17" value='function ModifyReport(&Rptfile){}'>
                        function ModifyReport(&Rptfile){}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q17" value='function ModifyReport($&Rptfile){}'>
                        function ModifyReport($&Rptfile){}
                    </label>
                    <label class="radio">
                        <input type="radio" name="q17" value="function ModifyReport(ByRef $Rptfile){}">
                        function ModifyReport(ByRef $Rptfile){}
                    </label>
                </li>
                <li>
                    <label>
                        Що буде якщо упустити "break" при написанні варіанта (case) при написанні конструкції switch?
                    </label>

                    <label class="radio">
                        <input type="radio" name="q18" value='Парсер PHP видасть помилку'>
                        Парсер PHP видасть помилку
                    </label>
                    <label class="radio">
                        <input type="radio" name="q18"
                               value='Код продовжить виконання всередині наступного case, що може призвести до помилок'>
                        Код продовжить виконання всередині наступного case, що може призвести до помилок
                    </label>
                    <label class="radio">
                        <input type="radio" name="q18" value='Браузер користувача видасть помилку'>
                        Браузер користувача видасть помилку
                    </label>
                    <label class="radio">
                        <input type="radio" name="q18"
                               value='Парсер, дійшовши до наступного case, автоматично вийде із switch-а'>
                        Парсер, дійшовши до наступного case, автоматично вийде із switch-а
                    </label>
                    <label class="radio">
                        <input type="radio" name="q18"
                               value="Код продовжить своє виконання всередині наступного case і видасть помилку">
                        Код продовжить своє виконання всередині наступного case і видасть помилку
                    </label>
                </li>
                <li>
                    <label>
                        Що буде надруковано в результаті виконанянаступного коду:
                    </label>
                    <blockquote>
                        echo {int} '1 марта 2009 г';
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q19" value='1'>
                        1
                    </label>
                    <label class="radio">
                        <input type="radio" name="q19" value='12009'>
                        12009
                    </label>
                    <label class="radio">
                        <input type="radio" name="q19" value='Виникне помилка виконання'>
                        Виникне помилка виконання
                    </label>
                    <label class="radio">
                        <input type="radio" name="q19" value='0'>
                        0
                    </label>
                </li>
                <li>
                    <label>
                        Що робить даний кусок коду:
                    </label>
                    <blockquote>
                        for ($j = 0; $j < count ($MyArray); $j++) {<br>
                            echo ($MyArray[$j]);<br>
                        }
                    </blockquote>

                    <label class="radio">
                        <input type="radio" name="q20" value='Друкує вміст масиву'>
                        Друкує вміст масиву
                    </label>
                    <label class="radio">
                        <input type="radio" name="q20" value='Нічого не змінює і не друкує'>
                        Нічого не змінює і не друкує
                    </label>
                    <label class="radio">
                        <input type="radio" name="q20" value='Додає значення в масив'>
                        Додає значення в масив
                    </label>
                    <label class="radio">
                        <input type="radio" name="q20" value='Друкує перший елемент масиву'>
                        Друкує перший елемент масиву
                    </label>
                    <label class="radio">
                        <input type="radio" name="q20" value='Змінює всі значення в масиві'>
                        Змінює всі значення в масиві
                    </label>
                </li>
            </ol>

        </div>

        <div style="text-align: center">
            <button type="submit" class="btn btn-success">Дізнатися результати!</button>
        </div>
    </form>


    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="index.php">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="tutorialFirst.php">
                        <button type="button" >
                            Наступна сторінка <span class="glyphicon glyphicon-arrow-right"></span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </div>

</div>

<?php include_once("footer.php");