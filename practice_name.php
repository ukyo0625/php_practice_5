<html>
<head>
  <meta charset="utf-8">
  <title>Practice</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    class Menu {
    public $name;
    }
    $curry = new Menu();
    $pasta = new Menu();
    $curry->name ='CURRY';
    $pasta->name ='PASTA';
    echo $curry->name;
    echo '<br>';
    echo $pasta->name;
  ?>

  <p>/class Menu {
  public $name;
  }
  $curry = new Menu();
  $pasta = new Menu();
  $curry->name ='CURRY';
  $pasta->name ='PASTA';
  echo $curry->name;
  echo '<br>';
  echo $pasta->name;
  </p>
</body>
</html>