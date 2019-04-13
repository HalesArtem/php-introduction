<?php
session_start ();
if (isset($_POST["send"])){
    #print_r($_POST);
    $from = htmlspecialchars ($_POST["from"]);
    $to = htmlspecialchars ($_POST["to"]);
    $subject = htmlspecialchars ($_POST["subject"]);
    $message = htmlspecialchars ($_POST["message"]);
    
    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    
    $error_from = "";
    $error_to = "" ;
    $error_subject = "" ; 
    $error_message = "" ;
    $error = false ;
    
    if($error_from == "" || !preg_match("/@/",$from)){
        $error_from = "Введите корректный mail ";
        $error = true;
    }
    if($error_to == "" || !preg_match("/@/",$to)){
        $error_to = "Введите корректный mail ";
        $error = true;
    }
    if($error_subject == 0 ){
        $error_subject = "Введите тему сообщения ";
        $error = true;
    }
    if($error_message == 0){
        $error_message = "Введите сообщение ";
        $error = true;
    }
}
?>
<DOCTYPE! HTML>                                                 
<html>
    <head>
        <title> ОБРАТНАЯ ФОРМА СВЯЗИ version 2.0.100500</title>
    </head>
    <body>
        <h2>ФОРМА ОБРАТНОЙ СВЯЗИ</h2>
                <form name="feedback" action="" method="post" >
                    <label>От кого : </label ><br />
                    <input type = "text" name = "from" value="<?=$_SESSION["from"]?>"/>
                    <span style="color:red"><?= $error_from ?></span> <br />
                    <label>Кому : </label ><br />
                    <input type = "text" name = "to" value="<?= $_SESSION["to"]?>" /><br />
                     <span style="color:red"><? echo "$error_to" ?></span>
                    <label>Тема : </label ><br />
                    <input type = "text" name = "subject" value="<?= $_SESSION["subject"]?>"/>
                     <span style="color:red"><?= $error_subject ?></span><br />
                    <label>Сообщение: </label ><br />
                    <textarea name="message" cols="30" rows="10"><?= $_SESSION["message"]?></textarea>
                    <span style="color:red"><?=$error_message ?></span><br />
                    <input type="submit" name ="send" value="Отправить" />
                    
                    
<?php
# учим курс html не забываем и CSS про фронт енд надо знать
# боллее крутую инф можно узнать в этих курсах 
# и сразу фигачим практику много практики 
# пока не будет норм скорости разработки качаем скил                    
?>
</form>                            
    </body>
    </html>