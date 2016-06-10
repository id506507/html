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
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--login panel-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--form-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--login button-->


    <style type="text/css">
        .header{
        font-size: 250%;
        color: #6699ff;
        font-family: Microsoft JhengHei;
        padding:30px 50px 20px 50px;
        }
        .search{
            float: right;
            padding-right: 20px;
            color: #6699ff;
            font-family: Microsoft YaHei;
            font-size: 100%;  
        }
        a {
            text-decoration:none;
            color: #6699ff;
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
        <div class="search"><a href="index.php">回首頁</a></div>
    </header>
    <section>
        <div class="panel panel-primary">
        <div class="panel-heading">登入</div>
        <div class="panel-body">
          <form action="login.php" method="post">
            <div class="form-group">
                帳號：<input type="text" class="form-control" name="account" required placeholder="請輸入帳號">
            </div>
            <div class="form-group">
                密碼：<input type="password" class="form-control" name="pw" required placeholder="請輸入密碼">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">登入</button>            
            </div>
            </form>
        </div>
        </div>
    </section>
</body>
</html>
