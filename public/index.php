<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <title>Calander</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary nb-3">
      <a href="/index.php" class="navbar-brand">My Calander</a>
    </nav>
    <?php
      require "../src/Date/Mounth.php";
      $mounth = new App\Date\Mounth(13, 2022);
    ?>

    <?php echo $mounth->toString(); ?>
  </body>
</html>
