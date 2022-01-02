<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>螺钉书城首页</title>
    <script src="../js/jquery-3.4.1/jquery-3.4.1.js"></script>
    <script src="../js/jquery-3.4.1/jquery-3.4.1.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        $(function(){
            $(".check").click(function(){
                $(".text").show();
            })
        })
    </script>
</head>
<body>
<div>
    <input type="button" class="check" />
    <input type="text" class="text" style="display:none;" />
</div>
</body>
</html>