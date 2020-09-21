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
    public function hello() {
      echo '私は'.$this->name.'です';
    }
  }

  $curry = new Menu();
  $pasta = new Menu();
  $curry->name = 'CURRY';
  $pasta->name = 'PASTA';
  $curry->hello();
  echo '<br>';
  $pasta->hello();

  ?>

  <p>class Menu {
    public $name;
    public function hello() {
      echo '私は'.$this->name.'です';
    }
  }

  $curry = new Menu();
  $pasta = new Menu();
  $curry->name = 'CURRY';
  $pasta->name = 'PASTA';
  $curry->hello();
  echo '<br>';
  $pasta->hello();
  </p>
</body>
</html>