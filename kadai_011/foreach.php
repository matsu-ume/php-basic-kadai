<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>連想配列</title>
  </head>

<body>
  <p>
    <?php
    $data_a = ['name' => '名前：玉ねぎ', 'price' => '値段：200', 'area' => '産地：北海道'];
    foreach ($data_a as $data_a) {
      echo $data_a . '<br>';
    }
    ?>
  </p>
  <p>
    <?php
    $pesonal_data = ['id :' => '1', '名前 :' => '侍太郎', '年齢 :' => '30'];
    foreach ($pesonal_data as $key => $pesonal_data) {
      echo $key. $pesonal_data;
      echo '<br>';
    }
    ?>
  </p>
</body>
</html>