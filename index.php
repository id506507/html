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
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> <!--table-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--search button-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--search form-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!--pagination-->

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
        margin-top: 50px;
        padding: 0px 50px 0px 50px;
        }
    </style>
</head>
<body>
    <header id="header">
	    <div class="header"><a href="index.php">宿舍公告系統</a></div>
        <div class="search">
        <form class="form-inline" role="form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="輸入關鍵字" value="<?=@$getKeyword;?>" name="keyword">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info" name="search">搜尋</button>
            </div>
            <div class="form-group">
                <a href="login.php">管理員登入</a></div>
          </form>
        </div>
    </header>
    <section>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width:5%">編號</th>
                    <th style="width:55%">標題</th>
                    <th style="width:10%">觀看次數</th>
                    <th style="width:10%">日期</th>
                    <th style="width:10%">發佈人</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>title</td><td>0</td><td>2016/06/09</td><td>1</td></tr>
                <tr><td>2</td><td>title</td><td>0</td><td>2016/06/09</td><td>1</td></tr>
            </tbody>
        </table>
    </section>
    <div class="search">
        <ul class="pagination">
            <li class="active"><a href="#">1</a></li>
            <li ><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>
</body>
</html>
