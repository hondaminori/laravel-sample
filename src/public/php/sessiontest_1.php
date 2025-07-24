<?php
  session_start();
?>

<head></head>
<body>

<?php
  if(!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = 1;
    echo '初回訪問です';

    $_SESSION['visited'] =1;
    $_SESSION['date'] = date('c');
  } else {
    $visited = $_SESSION['visited'];
    $visited++;
    $_SESSION['visited'] = $visited;

    echo $_SESSION['visited'] . '回目の訪問です<br>';

    if(isset($_SESSION['date'])) {
      echo '前回訪問は' . $_SESSION['date'] . 'です。';
      $_SESSION['date'] = date('c');
    }
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    echo '<pre>';
    var_dump($_COOKIE);
    echo '</pre>';
  }
?>
</body>

