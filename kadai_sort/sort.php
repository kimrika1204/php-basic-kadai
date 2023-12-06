<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 関数の動作確認
        // echo("昇順にソートします。");
        // echo "<br>";
        // $nums = [15, 4, 18, 23, 10 ];
        // sort($nums);
        // foreach ($nums as $num) {
        //     echo $num;
        //     echo "<br>";
        // }
        
        // echo("降順にソートします。");
        // echo "<br>";
        // rsort($nums);
        // foreach ($nums as $num) {
        //     echo $num;
        //     echo "<br>";
        // }

        // 独自関数の実装（if分岐による指定の前段まで）
        // $nums = [15, 4, 18, 23, 10 ];
        // function sort_2way($array) {
        //     sort($array);
        //     foreach ($array as $num) {
        //         echo $num;
        //         echo "<br>";
        //     }
        // }
        // sort_2way($nums);

        // 独自関数の実装（if分岐による指定を含める）
        function sort_2way($array, $order) {
            if ($order == true) {
                echo('昇順にソートします。' . '<br>');
                sort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }
            else {
                echo('降順にソートします。' . '<br>');
                rsort($array);
                foreach ($array as $num) {
                    echo $num . '<br>';
                }
            }
        }
        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>


