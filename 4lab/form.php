<style>

@media (min-width: 320px) and (max-width: 480px) and (orientation:portrait) {
    main {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
    }

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 28px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    nav {
        display: flex;
        flex-direction: column;
        background-color: dimgray;
        width: 100%;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    t1 {
        order: 1;
    }

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
    }
    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}

@media (min-width: 321px) and (orientation:landscape) and (max-width: 800px) {
    main {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
    }

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 28px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    nav {
        display: flex;
        flex-direction: column;
        background-color: dimgray;
        width: 100%;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    t1 {
        order: 1;
    }

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 100%;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 100%;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
    }
    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}






@media only screen and (min-width: 1224px) {

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 30px;
        text-align: center;
        width: 600px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    main {
        display: flex;
        flex-direction: column;
        width: 600px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
        border: 5px solid black;
        padding: 20px 20px 20px 20px;
    }

    nav {
        display: flex;
        background-color: dimgray;
        width: 640px;
        border: 5px solid black;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }
    /*t1 {
        order: 1;
    }*/

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;

    }
    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}
@media (min-width: 768px) and (max-width: 1224px) {

    header {
        display: flex;
        margin: auto;
        width: 100%;
        /* background: cornflowerblue;*/
        height: 70px;
        height: 120px;
        background: cornflowerblue url(image.png) no-repeat 5% 50%;
    }

    h4 {
        display: flex;
        font-size: 30px;
        text-align: center;
        width: 600px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        padding: 40px 0 0 0;
        display: block;
    }

    main {
        width: 600px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: beige;
        border: 5px solid black;
        padding: 20px 20px 20px 20px;
    }

    nav {
        display: flex;
        background-color: dimgray;
        width: 640px;
        border: 5px solid black;
        margin: 0 auto;
    }

        nav a {
            text-decoration: none;
            color: white;
            width: -webkit-fill-available;
            display: block;
            text-align: center;
            padding: 20px;
        }

            nav a:hover {
                background-color: rgba(30,30,30);
                transition: 0.4s ease;
            }

    html {
        font-size: 15px;
        font-family: 'Times New Roman'
    }

    h1 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    html {
        width: auto;
        height: auto;
        background-color: lightblue;
    }

    table {
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lavender;
        border: 1px solid black;
    }

    th {
        margin: 0 auto;
        border: 2px solid black;
    }

    td {
        border: 2px solid black;
        margin: 0 auto;
    }

    tr:nth-child(n) {
        background-color: lavenderblush;
    }

    tr:nth-child(2n) {
        background-color: mintcream;
    }

    tr:nth-child(1) {
        background-color: lightgray;
    }

    h3 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
        background-color: lightcyan;
        border: 1px solid black;
    }

    form {
        text-align: center;
        width: 500px;
        margin: 0 auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: purple;
        background-color: lightcyan;
        border: 1px solid black;
    }

    lable {
    }

    input {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    textarea {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    select {
        margin: 0 auto;
        background: mintcream;
        color: black;
    }

    h2 {
        font-size: 30px;
        text-align: center;
        width: 500px;
        margin: auto;
        font-family: Georgia, "Times New Roman", Times, serif;
        color: black;
    }

    footer {
        margin: auto;
        width: 100%;
        background: cornflowerblue;
        height: 70px;
        padding: 10px;
        height: 120px;
        font-size: 30px;
        text-align: center;
    }
}
   
</style>
<?php
if (!empty($messages)) {
  print('<div id="messages">');
  // Выводим все сообщения.
  foreach ($messages as $message) {
    print($message);
  }
  print('</div>');
}
?>
<body>
    <div class="main">
    <h1>Форма</h1>
    
    <form action="index.php" method="POST">
            <div class="pas <?php if ($errors['name']) {print 'error';} ?>" >
                Имя:
                <input name="name" placeholder="Введите имя" 
                 value="<?php print $values['name']; ?>" />
            </div>

            <div class="pas <?php if ($errors['email']) {print 'error';} ?>">
                E-mail:
                <input name="email" type="email" placeholder="Введите почту" value="<?php print $values['email']; ?>"
	            >
            </div>

            <div class="pas" >
                Год рождения:
                <select id="yearB" name="year" >
                <?php
             for($i=1950;$i<=2023;$i++){
             if($values['year']==$i){
             printf("<option value=%d selected>%d </option>",$i,$i);
              }
             else{
             printf("<option value=%d>%d </option>",$i,$i);
            }
          }
          ?>
          </select>
            </div>

            <div class="pas <?php if ($errors['radio-1']) {print 'error';} ?>"> 
                Пол:<br>
                <input type="radio" name="radio-1" value="male"  <?php if($values['radio-1']=="male") {print 'checked';} ?>/>
                Мужской
                <input type="radio" name="radio-1" value="female" <?php if($values['radio-1']=="female") {print 'checked';} ?>/>
                Женский
            </div>



            <div class="pas <?php if ($errors['radio-2']) {print 'error';} ?>">
                Сколько конечностей?<br>
                    <input type="radio" name="radio-2" value="4" <?php if($values['radio-2']=="4") {print 'checked';} ?>/>
                    4

                    <input type="radio" name="radio-2" value="3" <?php if($values['radio-2']=="3") {print 'checked';} ?>/>
                    3

                    <input type="radio" name="radio-2" value="2" <?php if($values['radio-2']=="2") {print 'checked';} ?>/>
                    2

                    <input type="radio" name="radio-2" value="1" <?php if($values['radio-2']=="1") {print 'checked';} ?>/>
                    1
            </div>


            <div class="pas <?php if ($errors['super']) {print 'error';} ?>">
                Сверхспособности?
                
                    <select name="super[]" multiple="multiple">
                    <?php if ($errors['super']) {print 'class="error"';} ?> >
                    <option value="inv" <?php if($values['inv']==1){print 'selected';} ?>>Бессмертие</option>
                    <option value="walk" <?php if($values['walk']==1){print 'selected';} ?>>прохождение сквозь стены</option>
                    <option value="fly" <?php if($values['fly']==1){print 'selected';} ?>>левитация</option>
                    </select>
                
            </div>

            <div class="pas <?php if ($errors['bio']) {print 'error';} ?>">
                Биография?
                <textarea name="bio"><?php print $values['bio']; ?></textarea>
            </div>

            <div class="pas <?php if ($errors['check-1']) {print 'error';} ?> ">
                <input type="checkbox" name="check-1" <?php if($values['check-1']==TRUE){print 'checked';} ?>/> С контактом ознакомлен(а)
            </div>


            <p>
                Отправка формы:
                <input type="submit" value="Send" />
            </p>
        </form>
    </div>
</body>
