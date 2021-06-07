<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulář</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="POST">
        <input type="text" name="name" id="name" placeholer="Zadejte svoje celý jméno"> <?php echo $nameErr ?>
        <input type="text" name="email" id="email"><?php echo $emailErr ?>
        <textarea name="text" id="text" cols="30" rows="10" placeholer="Zde zadejte svojí zpravu."></textarea><?php echo $textErr ?>
        <input type="submit" value="Odeslat">
    </form>

<?
    $name = $email = $text = "";
    $nameErr = $emailErr = $textErr = "";
    $to = "dobrotvor.work@gmail.com";
    $from = "";
    $fullName = "";
    $message = "";

    if(!empty($_POST["submit"])){
        if(empty($_POST["name"])) {
            $nameErr = "Musite zadat své cele jméno ";
        }
        else {
            $name = $_POST["name"];
        }
        if(empty($_POST["email"])) {
            $emailErr = "Musite zadat svůj email ";
        }
        else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if(empty($_POST["text"])) {
            $textErr = "Musite zadat zprávu ";
        }
        else {
            $text = $_POST["text"];
        }
        mail($to, $fullName, $message);
    }
?>
</body>
</html>