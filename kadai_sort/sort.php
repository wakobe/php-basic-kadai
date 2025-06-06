<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
       <?php
function sort_2way(array $nums, bool $order): void {
    if ($order) {
        sort($nums);   // 昇順
    } else {
        rsort($nums);  // 降順
    }

    foreach ($nums as $num) {
        echo $num . "<br>";
    }
}

// 使用例
$nums = [15, 4, 18, 23, 10];

echo "昇順にソートします。<br>";
sort_2way($nums, true);   // true = 昇順

echo "<br>降順にソートします。<br>";
sort_2way($nums, false);  // false = 降順
?>


    </p>
</body>

</html>