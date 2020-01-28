<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bit Academy Calculetor</title>
  </head>
  <body>

    <form class="" method="post">
      <div class="">
        <input type="number" name="firstNumber" value="">
        <label for="firstNumber">First Number</label>
      </div>
      <div class="">
        <input type="number" name="secondNumber" value="">
        <label for="secondNumber">Second Number</label>
      </div>
      <div class="">
        <input type="submit" name="operetion" value="Add">
        <input type="submit" name="operetion" value="Subtract">
        <input type="submit" name="operetion" value="Multiply">
        <input type="submit" name="operetion" value="Divide">
        <input type="submit" name="operetion" value="Modulo">
      </div>
    </form>

  <?php
    if (isset($_POST["operetion"]) && is_numeric($_POST["firstNumber"]) && is_numeric($_POST["secondNumber"])) {

      switch ($_POST["operetion"]) {
        case "Add":
          $antwoord = $_POST["firstNumber"] + $_POST["secondNumber"];
            echo "$antwoord";
          break;
        case "Subtract":
          $antwoord = $_POST["firstNumber"] - $_POST["secondNumber"];
            echo "$antwoord";
          break;
        case "Multiply":
          $antwoord = $_POST["firstNumber"] * $_POST["secondNumber"];
            echo "$antwoord";
          break;
        case "Divide":
          $antwoord = $_POST["firstNumber"] / $_POST["secondNumber"];
            echo "$antwoord";
          break;
        case "Modulo":
          $antwoord = $_POST["firstNumber"] % $_POST["secondNumber"];
            echo "$antwoord";
          break;

        default:
            echo "Je hebt niks gedrukt";
          break;
      }
    }
  ?>

  </body>
</html>
