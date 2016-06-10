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
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--navbar-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--mainbg-->

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
        padding: 0px 50px 0px 50px;
        Font-family:Microsoft YaHei;
        }
        nav{
            margin: 30px 50px 20px 50px;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="header">宿舍公告系統</div>
    </header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="photo/navbar.png" width="20px" height="20px">
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="manage.php">管理首頁</a></li>
                <li><a href="#">建立新公告</a></li>
                <li><a href="#">管理公告</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="jumbotron">
            <h3>管理員可以在此系統發佈消息或管理公告。</h3>
            <h3>在「建立新公告」中可發佈新消息及上傳所需的附件。</h3>
            <h3>在「管理公告」中可編輯及刪除公告。</h3>
            <h3>如在使用此系統時出現任何問題或有意見提出，可<a href="email.php" target="_blank">聯絡</a>告知。</h3>
        </div>
    </section>
</body>
</html>
