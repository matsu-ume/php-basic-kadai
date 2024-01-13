<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
      $nums = array(15, 4, 18, 23, 10);
      function sort_2way($array, $order) {
        if ($order === true) {
          sort($array);
          echo "昇順にソートします。<br>";
            foreach ($array as $num) {
              echo "$num <br>";
            }   
        } else {
          rsort($array);
          echo "降順にソートします。<br>";
            foreach ($array as $num) {
              echo "$num <br>";
            }
        }
        return $array;
      }

      $nums = sort_2way($nums, true);
      $nums = sort_2way($nums, false);

      ?>
    </p>
</body>
</html>