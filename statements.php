<?php include_once("header.php");
session_destroy();
?>

<div class="mypadding" style="text-align: justify">

    <div class="h1" style="text-align: center">
        Математичні оператори та математичні функції PHP
    </div>
    <div>
        <p>
            Числові дані обробляються за допомогою таких операторів PHP:
        </p>
        <p>
            <b>+</b> сума двух чисел
        </p>
        <p>
            <b>-</b> різниця чисел
        </p>
        <p>
            <b>/</b> частка від ділення двух чисел
        </p>
        <p>
            <b>%</b> залишок від ділення
        </p>
        <code>
            &lt;?php<br>
            echo "2 + 2 = ", 2 + 2;<br>
            echo "5 - 2 = ", 5 - 2;<br>
            echo "10 * 10 = ", 10 * 10;<br>
            echo "100 / 2 = ", 100 / 2;<br>
            echo "10 % 2 = ", 10 % 2;<br>
            ?>
        </code>
        <p>
            Відображення в браузері
        </p>
        <blockquote>
            2 + 2 = 4<br>
            5 - 2 = 3<br>
            10 * 10 = 100<br>
            100 / 2 = 50<br>
            10 % 2 = 0<br>
        </blockquote>
    </div>

    <div class="h1" style="text-align: center">
        Математичні функції
    </div>
    <div>
        <p>
            PHP має величезну кількість математичних функцій, ось їх повний перелік:
        </p>
        <ul>
            <li>
                <b>Abs.</b> Модуль числа.
            </li>
            <li>
                <b>Sin.</b> Синус.
            </li>
            <li>
                <b>Sinh.</b> Гіперболічний синус.
            </li>
            <li>
                <b>Cos.</b> Косинус
            </li>
            <li>
                <b>Cosh.</b> Гіперболічний косинус.
            </li>
            <li>
                <b>Acos.</b> Арккосинус
            </li>
            <li>
                <b>Acosh.</b> Гіперболічний арккосинус.
            </li>
            <li>
                <b>Asin.</b> Арксинус.
            </li>
            <li>
                <b>Asinh.</b> Гіперболічний арксинус.
            </li>
            <li>
                <b>Atan2.</b> Арктангенс приватного двох змінних.
            </li>
            <li>
                <b>Tan.</b> Тангенс.
            </li>
            <li>
                <b>Tanh.</b> Гіперболічний тангенс.
            </li>
            <li>
                <b>Atan.</b> Арктангенс.
            </li>
            <li>
                <b>Atanh.</b> Гіперболічний арктангенс
            </li>
            <li>
                <b>Base_convert.</b> Перетворення числа в строковому поданні з однієї системи числення в іншу.
            </li>
            <li>
                <b>Decoct.</b> Перетворення числа в вісімкове подання у вигляді рядка.
            </li>
            <li>
                <b>Bindec.</b> Перетворення рядка, наданої в довічним числі, в ціле значення.
            </li>
            <li>
                <b>Octdec.</b> Перетворення рядка, що представляє вісімкове число, в ціле число.
            </li>
            <li>
                <b>Hexdec.</b> Перетворення рядка, яка представляє шістнадцяткове число, в ціле число.
            </li>
            <li>
                <b>Ceil.</b> Округлення числа в більшу сторону.
            </li>
            <li>
                <b>Floor.</b> Округлення числа в меншу сторону.
            </li>
            <li>
                <b>Deg2rad.</b> Градуси в радіани.
            </li>
            <li>
                <b>Exp.</b> Обчислення експоненти числа.
            </li>
            <li>
                <b>Fmod.</b> Залишок від ділення двох чисел.
            </li>
            <li>
                <b>Getrandmax</b> Макс. значення, яке отримують функцією <i>rand ()</i>
            </li>
            <li>
                <b>Hypot.</b> Обчислення гіпотенузи за двома катетам.
            </li>
            <li>
                <b>ls_finite.</b> Перевірка, чи є число кінцевим дійсним числом.
            </li>
            <li>
                <b>ls_infinite.</b> Перевірка, чи є число нескінченністю.
            </li>
            <li>
                <b>ls_nan.</b> Перевірка, чи є значення Не кількістю (Not-A-Number).
            </li>
            <li>
                <b>Lcg_value.</b> Генератор випадкових чисел.
            </li>
            <li>
                <b>Log10.</b> Десятковий логарифм.
            </li>
            <li>
                <b>Log.</b> Натуральний логарифм
            </li>
            <li>
                <b>Max.</b> Максимум заданих чисел.
            </li>
            <li>
                <b>Min.</b> Мінімум заданих чисел.
            </li>
            <li>
                <b>Mt_getrandmax.</b> Макс. значення, яке можна отримати функцією <i>mt_rand</i> .
            </li>
            <li>
                <b>Mt_rand.</b> Генератор псевдовипадкових чисел за алгоритмом.
            </li>
            <li>
                <b>Pi.</b> Значення числа π.
            </li>
            <li>
                <b>Pow.</b> Зведення в ступінь.
            </li>
            <li>
                <b>Round.</b> Округлює число типу float.
            </li>
            <li>
                <b>Sqrt.</b> Квадратний корінь.
            </li>
        </ul>

        <code>
            &lt;?php<br>
            echo "round(4.2) = ", round(4.2);<br>
            ?>
        </code>
        <p>
            Відображення в браузері
        </p>
        <blockquote>
            round(4.2) = 4
        </blockquote>
    </div>

    <div class="h1" style="text-align: center">
        Оператори присвоєння в PHP
    </div>
    <div>
        <p>
            Основним оператором присвоєння є знак рівності <code>=</code>. Він привласнює значення певної змінної:
        </p>
        <code>
            &lt;?php<br>
            $fruits = 14;<br>
            ?>
        </code>
        <p>
            В одному рядку можна присвоїти одне значення відразу декільком змінним, наприклад:
        </p>
        <code>
            &lt;?php<br>
            $n = $m = $p = 3;<br>
            echo $n, $m, $p;<br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            333
        </blockquote>
        <p>
            Також в PHP є комбіновані оператори, які роблять код більш компактним. Ось їх перелік:
        </p>
        <ul>
            <li>
                +=
            </li>
            <li>
                -=
            </li>
            <li>
                /=
            </li>
            <li>
                .=
            </li>
            <li>
                %=
            </li>
            <li>
                &=
            </li>
            <li>
                |=
            </li>
            <li>
                ^=
            </li>
            <li>
                <=
            </li>
            <li>
                >=
            </li>
        </ul>

        <p>
            Наприклад, якщо потрібно додати 55 до значення змінної <code>$number</code>, це можна записати як:
            <code>$number = $number + 55</code>, а якщо використовувати комбінований оператор, то так:
            <code>$number += 55</code>.
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Збільшення і зменшення
    </div>
    <div>
        <p>
            Досить часто в ході написання PHP скрипта потрібно або додати до змінної одиницю, або відняти.
        </p>
        <p>
            Для цього в PHP є спеціальні оператори. Наприклад, якщо є змінна <code>$a = 0</code>,
            то щоб додати 1 до цієї змінної потрібно написати: <code>$a++</code>, це означає,
            що до змінної <code>$а</code> буде додана одиниця, якщо потрібно відняти 1,
            то потрібно записати так: <code>$a--</code>.
        </p>
        <p>
            Оператор <code>++</code> називають інкрементом, а <code>--</code> декрементом.
        </p>
        <p>
            <b>++ $ a</b> Пре-інкремент. Збільшує значення на одиницю, потім повертає значення
        </p>
        <p>
            <b>$ A ++</b> Пост-інкремент. Повертає поточне значення, після чого збільшує його на одиницю.
        </p>
        <p>
            <b>- $ a</b> Пре-декремент. Зменшує значення на одиницю, потім повертає значення
        </p>
        <p>
            <b>$ a--</b> Пост-декремент. Повертає поточне значення, після чого зменшує його на одиницю.
        </p>
        <code>
            &lt;?php<br>
            $a = $b = $c = $d = 2;<br>
            <br>
            echo $a++; <br>
            echo ++$b; <br>
            echo $c--; <br>
            echo --$d; <br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            2<br>
            3<br>
            2<br>
            1
        </blockquote>
    </div>

    <div class="h1" style="text-align: center">
        Пріоритет операторів PHP
    </div>
    <div>
        <p>
            Якщо ви використовуєте кілька операторів одночасно в одному вираженні, то потрібно знати в якому
            порядку вони будуть виконуватися.
        </p>
        <p>
            Ця таблиця показує оператори по спадаючій пріоритету (оператори з одним пріоритетом виконуються
            зліва на право):
        </p>
        <table style="width: 100%">
            <tr>
                <td>new</td>
            </tr>
            <tr>
                <td>[</td>
            </tr>
            <tr>
                <td>! ~ ++ - (int) (float) (string) (array) (object)</td>
            </tr>
            <tr>
                <td>@</td>
            </tr>
            <tr>
                <td>* /%</td>
            </tr>
            <tr>
                <td>+ -.</td>
            </tr>
            <tr>
                <td><></td>
            </tr>
            <tr>
                <td><<=>> =</td>
            </tr>
            <tr>
                <td>&</td>
            </tr>
            <tr>
                <td>^</td>
            </tr>
            <tr>
                <td>|</td>
            </tr>
            <tr>
                <td>&&</td>
            </tr>
            <tr>
                <td>||</td>
            </tr>
            <tr>
                <td>? :</td>
            </tr>
            <tr>
                <td>= + = - = * = / =. =% = & = | = ^ = <=> =</td>
            </tr>
            <tr>
                <td>print</td>
            </tr>
            <tr>
                <td>and</td>
            </tr>
            <tr>
                <td>xor</td>
            </tr>
            <tr>
                <td>or</td>
            </tr>
            <tr>
                <td>,</td>
            </tr>
        </table>

        <p>Для зміни порядку виконання операторів потрібно використовувати круглі дужки!</p>
    </div>

    <div class="h1" style="text-align: center">
        Оператор виконання PHP
    </div>
    <div>
        <p>
            У PHP існує такий оператор, як <b>оператор виконання</b>,
            він потрібен для того щоб виконувати команди ОС і використовувати результат цього виконання.
        </p>
        <p>
            Будь-який рядок, який укладений в зворотні апострофи - ` вважаються як команда ОС. Наприклад:
        </p>
        <code>
            &lt;?php<br>
            $d = `dir d:\\`;<br>
            echo $d;<br>
            ?>
        </code>
        <p>
            Як результат ви отримаєте список директорій диска D.
        </p>
    </div>

    <div class="h1" style="text-align: center">
        Строкові оператори PHP
    </div>
    <div>
        <p>
            PHP має два строкових оператора.
        </p>
        <p>
            <b>Перший</b> - оператор конкатенації ., який об'єднує два рядки в один.
        </p>
        <p>
            <b>Другий</b> - конкатенуються оператор присвоєння .=, додає до рядка потрібне значення. Наприклад:
        </p>
        <code>
            &lt;?php<br>
            $d = "Hello";<br>
            $f = $d." world";   // Тепер $f = "Hello world"<br>
            <br>
            echo $f;<br>
            <br>
            echo "<br/>";<br>
            <br>
            $f .= " ! ! !";   // Тепер $f = "Hello world ! ! !"<br>
            <br>
            echo $f;<br>
            ?>
        </code>
        <p>
            Відображення в браузері:
        </p>
        <blockquote>
            Hello world<br>
            Hello world ! ! !
        </blockquote>

        <div style="text-align: center">
            <p class="text-info">
                Ви можете пройти коротке тестування по пройденному матеріалу за наступним посиланням:
            </p>
            <p>
                <a href="tutorialTestPart1.php">
                    Перейди за мною :)
                </a>
            </p>
        </div>
    </div>

    <div class="row-fluid" style="text-align: center">
        <div class="span12">
            <div class="row-fluid">

                <div class="span6 btn btn-link">
                    <a href="variables.php">
                        <button type="button">
                            <span class="glyphicon glyphicon-arrow-left"></span> Попередня сторінка
                        </button>
                    </a>
                </div>

                <div class="span6 btn btn-link">
                    <a href="conditionalStatements.php">
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