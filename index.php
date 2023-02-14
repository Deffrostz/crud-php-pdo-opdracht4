<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Bling Bling nagelstudio Chantal</title>
</head>
<body>
    <h1>Bling Bling nagelstudio Chantal</h1>

       <form>
    <label for="basiskleuren">Kies 4 basiskleuren voor uw nagels:</label><br>
    <input type="color" id="basiskleuren1" name="basiskleuren1" value="#FF0000">
    <input type="color" id="basiskleuren2" name="basiskleuren2" value="#00FF00">
    <input type="color" id="basiskleuren3" name="basiskleuren3" value="#0000FF">
    <input type="color" id="basiskleuren4" name="basiskleuren4" value="#FFFFFF"><br>
    <label for="telefoonnummer">Uw telefoonnummer:</label>
  <input type="tel" id="telefoonnummer" name="telefoonnummer" pattern="[0-9]{10}" placeholder="+31 6 2570 51 41" required><br><br>

  <label for="email">Uw e-mailadres:</label>
  <input type="email" id="email" name="email" placeholder="ChantalJansen@ziggo.com" required><br><br>

  <label for="afspraak">Afspraak datum/tijd:</label>
  <input type="datetime-local" id="afspraak" name="afspraak" required><br><br>

  <label for="behandeling1">
    <input type="checkbox" id="behandeling1" name="behandeling[]" value="nagelbijt">
    Nagelbijt arrangement (termijnbetaling mogelijk) €180
  </label><br>

  <label for="behandeling2">
    <input type="checkbox" id="behandeling2" name="behandeling[]" value="manicure">
    Luxe manicure (massage en handpakking) € 30,00
  </label><br>

  <label for="behandeling3">
    <input type="checkbox" id="behandeling3" name="behandeling[]" value="reparatie">
    Nagelreparatie per nagel (in eerste week gratis) € 5,00
  </label><br><br>

  <input type="hidden" id="verzendtijd" name="verzendtijd" value="<?php echo date('Y-m-d H:i:s'); ?>">

  <input type="submit" value="Sla op">
  <input type="reset" value="Reset">
</form>







</body>
</html>