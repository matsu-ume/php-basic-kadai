<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>クラス作成</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      private function show_price() {
        echo $this->price . '<br>';
      }
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      private function show_height() {
        echo $this->height . '<br>';
      }


    }

    $food = new Food('potato', 250);
    print_r($food);

    $amimal = new Animal('dog', 60, 5000);
    print_r($amimal);

  ?>
  </p>
</body>
</html>