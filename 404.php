<!DOCTYPE HTML>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,user-scalable=no">
<title>页面没找到 -
<?php $this->options->title() ?>
</title>
<!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <![endif]-->
<link rel="stylesheet" href="http://cdn.staticfile.org/normalize/3.0.1/normalize.min.css">
<script type="text/javascript" src="http://cdn.staticfile.org/jquery/1.11.0/jquery.min.js"></script>
<style type="text/css">
        .body404{
            position: absolute;
            height: 100%;
            width: 100%;
            background-size: auto 100%;
            text-shadow:1px 1px 0 #fff;
        }
        .body-about .body404{
            background:#fff;
        }
        .site-name404 {
            margin: 0 auto;
            width: 3em;
            text-align: center;
            letter-spacing: 2px;
            font:700 88px/1.2 "ff-tisa-web-pro", Cambria, "Times New Roman", Georgia, Times, sans-serif;
        }
        .site-name404 h1{
            margin: 0 0 10px;
            font:700 58px/1.2 "ff-tisa-web-pro", Cambria, "Times New Roman", Georgia, Times, sans-serif;
        }
        .title404 span{
            font-size: 15px;
            width: 2px;
        }
        .site-name404 i {
            font-style: normal;
        }
        .title404 p{
            font-size: 20px;
            margin: 0.5em 0 .6em;
        }
        .info404{
            position: absolute;
            top: 50%;
            font-family: Lato, "Microsoft Jhenghei", "Hiragino Sans GB", "Microsoft YaHei", sans-serif;
            text-align: center;
            width: 100%;
            margin-top: -160px;
        }
        .body-about .info404{
            margin-top: -180px;
        }
        #footer404{
            margin-top:30px;
        }
        .index404{
            margin-top: 13px;
            display: inline-block;
            padding: 14px 27px 14px 29px;
            color: #fff;
            white-space: nowrap;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
            background: #3ac19f;
            font-weight: 500;
            line-height: 14px;
            letter-spacing: 1px;
            font-size: 14px;
            text-decoration: none;
            -moz-user-select: -moz-none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            text-shadow:none;
        }
        .index404:hover{
            background-color: #3ac19f;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="body404">
  <div class="info404">
    <header id="header404" class="clearfix">
      <div class="site-name404"> <i>404</i> </div>
    </header>
    <section>
      <div class="title404">
        <p>用文字记录生活<br/>
          还原最美的笔尖记忆</p>
      </div>
      <a class="index404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">返回首页</a> </section>
    <footer id="footer404">Copyright &copy; 2015-2017 <?php $this->options->title() ?></span> </footer>
  </div>
</div>
</body>
</html>