<html>
  <head>
    <title>User Login</title>
    <style>
      <?php
        include("custom.css");
      ?>
      <link rel="stylesheet" type="text/css" href="custom.css">
    </style>
  </head>
  <body>
    <form action="data_extractor.php" method="post">
      <center><header>Enter Prospector Details</header><br><br>
      <table border="0">
        <tr><th>Domain Name :</th><td><input type="text" name="domain"></td></tr>
        <tr><th>Query :</th><td><input type="Text" name="query"></td></tr>
        </table><br><br>
        <input value="Extract Information" type="submit">&nbsp;&nbsp;<input value="Cancel" type="reset"><br><br>
    </form>
  <body>
</html>
