<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obvod a Obsah obdélníku</title>
</head>

<body>
    <h1>Výpočet Obvodu a Obsahu obdélníku</h1>
    <section>
        <div class="forms">
            <form action="index.php" method="POST">
                <p><br> <input type="number" min="1" step="1" name="first" id="first" placeholder="První číslo:"></p>
                <p><br> <input type="number" min="1" step="1" name="second" id="second" placeholder="Druhý číslo:"></p>

                <div class="options">
                    <p><input type="checkbox" name="option[]" value="Obvod">Obvod</p>
                    <p><input type="checkbox" name="option[]" value="Obsah">Obsah</p>
                </div>
                <input type="submit" value="Odeslat" class="button">
            </form>
        </div>
    </section>
    <?php
    if (isset($_POST['first']))
    if (isset($_POST['second']))
    if (isset($_POST['option'])) {
        $first = $_POST['first'];
        $second = $_POST['second'];
        $obvod = 2 * $first + 2 * $second;
        $obsah = $first * $second;

  foreach($_POST['option'] as $val) {
    if ($val == "Obvod") {
      echo "Obvod obdelniku je " . $obvod . "<br>";
    }
    if ($val == "Obsah") {
      echo "Obsah obdelniku je " . $obsah . "<br>";
    }
    }
  }
?>
<?php
if (isset($_POST['option'])) {
  if ($val == "Obsah" && $val == "Obvod") {
    echo "Obvod obdelniku je " . $obvod;
    echo "Obsah obdelniku je " . $obsah;
  }
}
?>
</body>

</html>