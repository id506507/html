<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>宿舍公告系統</title>
    <link rel="shortcut icon" href="photo/icon.ico"><!--icon-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--panel-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--form-->


    <style type="text/css">
        .header{
        font-size: 250%;
        color: #6699ff;
        font-family: Microsoft JhengHei;
        padding:30px 50px 20px 50px;
        }
        section {
        padding: 50px 50px 0px 50px;
        font-size: 150%;
        font-family: Microsoft JhengHei;
        }
    </style>

</head>
<body>
    <header id="header">
	    <div class="header"><a href="index.php">宿舍公告系統</a></div>
    </header>
    <section>
        <div class="panel panel-info">
            <div class="panel-heading">
                意見及問題反映
            </div>
            <div class="panel-body">
                <form action="send.php" method="post">
                    <div class="form-group">
                        姓名：<input type="text" class="form-control" name="name" required placeholder="請輸入姓名">
                    </div>
                    <div class="form-group">
                        電郵：<input type="text" class="form-control" name="email" required placeholder="請輸入電郵">
                    </div>
                    <div class="form-group">
                        標題：<input type="text" class="form-control" name="subject" required placeholder="請輸入標題">
                    </div>
                    <div class="form-group">
                        內容：<textarea rows="4" cols="50" class="form-control" name="content" required placeholder="請輸入內容"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">提交意見</button>            
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
