<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>易經練習</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        body{
            background-color: #f2f7f7;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_POST)) {
        $num1 = $_POST['n1'] % 8;
        $num2 = $_POST['n2'] % 8;
        $num3 = $_POST['n3'] % 6;
    }
    ?>
    <div class="container mt-5 text-center">
        <h1 class="text-primary">易經數字卜卦</h1>
        <p class="text-secondary">八卦順序為乾一、兌二、離三、震四、巽五、坎六、艮七、坤八 <br>
            乾為天、兌為澤、離為火、震為雷、巽為風、坎為水、艮為山、坤為地</p>
        <hr>
        <h3 class="text-secondary">請輸入三個三位數</h3>
        <form class="mx-auto mt-2" action="?" method="POST" id="myForm">
            <div class="form-group">
                <input type="number" class="form-control mt-3" id="num1" name="n1" placeholder="輸入第一個三位數" max="999" required>
                <input type="number" class="form-control mt-3" id="num2" name="n2" placeholder="輸入第二個三位數" max="999" required>
                <input type="number" class="form-control mt-3" id="num3" name="n3" placeholder="輸入第三個三位數" max="999" required>
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        <!-- result -->
        <?php
        if (!empty($_POST)) {
            $num1 = $_POST['n1'] % 8;
            $num2 = $_POST['n2'] % 8;
            $num3 = $_POST['n3'] % 6;
            $array = ['坤', '乾', '兌', '離', '震', '巽', '坎', '艮'];
            $array2 = ['地', '天', '澤', '火', '雷', '風', '水', '山'];
        ?>
            <div class="mt-5 text-primary">
                <p class="text-danger">您輸入的數字分別為 <?= $_POST['n1'] . ' , ' . $_POST['n2'] . ' , ' . $_POST['n3']; ?></p>
                <p>下掛 : <?= $array[$num1] . '/' . $array2[$num1]; ?></p>
                <p>上掛 : <?= $array[$num2] . '/' . $array2[$num2]; ?></p>
                <p>變爻 : 第<?= $num3; ?>爻</p>
            </div>
            <p class="my-5">請自行前往以下網站查詢卜卦結果 → <a href="https://www.eee-learning.com/article/2076" target="_blank">易學網</a></p>
        <?php
        }
        ?>
        <!-- result end -->

        <!-- Footer -->
        <footer class="text-secondary py-5 my-5">
            &#169; 網頁練習 2022
        </footer>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>