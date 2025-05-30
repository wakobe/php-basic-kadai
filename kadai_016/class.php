<?php
// Foodクラスの定義
class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // 価格を表示するメソッド
    public function show_price() {
        echo "価格: " . $this->price . "円";
    }
}

// Animalクラスの定義
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // 身長を表示するメソッド
    public function show_height() {
        echo "身長: " . $this->height . "cm";
    }
}

// Foodクラスのインスタンスを作成
$food = new Food("りんご", 150);

// Animalクラスのインスタンスを作成
$animal = new Animal("キリン", 500, 900);

// インスタンスの情報を出力
echo "Foodインスタンスの情報:";
print_r($food);

;echo "<br>Animalインスタンスの情報:";
print_r($animal);

// メソッドを呼び出して値を表示
echo "<br>Foodクラスのメソッド呼び出し結果:";
$food->show_price();

echo "<br>Animalクラスのメソッド呼び出し結果:";
$animal->show_height();
?>
