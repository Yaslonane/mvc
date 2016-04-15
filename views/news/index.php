<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->
  </head>
  <body class="container">
	<div class="main_menu">
		<ul class="main_menu nav nav-pills nav-justified">
			<li role="presentation"><a href="#">home</a></li>
			<li role="presentation"><a href="#">portfolio</a></li>
			<li role="presentation"><a href="#">reviews</a></li>
			<li role="presentation"><a href="#">blog</a></li>
		</ul>
	</div>
	<div class="top row">
	<div>
		слайдер карусель
	</div>
	</div>
	<div class="midle row">
		<div class="content col-md-9">
            <?php foreach($newsList as $newsItem):?>
			<div class="intro_article">
				<table>
					<tr>
						<td colspan="2"><h2><?php echo $newsItem['title'];?></h2></td>
					</tr>
					<tr>
						<td><h4><small>категория1</small></h4></td>
						<td><strong>Tags: </strong><a href='#'>тег1</a> <a href='#'>тег2</a> <a href='#'>тег3</a></td>
                    </tr>
					<tr>
						<td colspan="2">
							<img src="http://test.test/blog/images/im2.png" alt="image" class="img-rounded" align="left" vspace="5" hspace="5"> <p class="text-justify"><?php echo $newsItem['short_content'];?></p>
						</td>
					</tr>
					<tr>
						<td><h4><small>Autor name: Иванов Иван</small></h4></td>
						<td rowspan="2"  class="text-right" ><a href="/news/<?php echo $newsItem['id'];?>">read more</a></td>
					</tr>
					<tr>
						<td><h4><small>date  <?php echo $newsItem['date'];?></small></h4></td>
					</tr>
				</table>
			</div>
            <?php endforeach;?>

		</div>
		<div class="right_bar col-md-3">
			<div class="row">
				<form class="form-inline" role="form">
				  <div class="form-group">
					<input type="email" class="form-control" id="search" placeholder="Найти...">
				  </div>
				  <button type="submit" class="btn btn-default">Найти</button>
				</form>
			</div>
			<div class="row">
				<ul class="nav nav-list">
					<li class="nav-header">Заголовок</li>
					<li><a href="#">Linux</a></li>
					<li><a href="#">Web</a></li>
					<li><a href="#">Windows</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer row">
		<div class="col-md-4 text-center">соцсети</div>
		<div class="col-md-4 text-center">копирайт</div>
		<div class="col-md-4 text-center">цитатник</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://test.test/blog/js/bootstrap.js"></script>
  </body>
</html>