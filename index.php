<?php 
include('dbh.php');
$stmt=$dbh->query('SELECT * FROM posts ORDER BY time DESC LIMIT 5');
$dbh=null;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>井村-講師DB連携チャレンジ</title>
<link type="text/css" rel="stylesheet" href="css/main.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/main.js"></script>
</head>
<body>
<div class="container">
	<header id="global_header">
		<a href="">
			<h1 class="logo">
				<span class="invisible">ここに見出し（CSSで非表示にしているので検索エンジンには見えても、人間には見えないよ）</span>
			</h1>
		</a>
		<nav class="utility_nav">
			<ul>
			<li><a href="">NEWS</a></li>
			<li><a href="">SITEMAP</a></li>
			<li><a href="">PRIVACY</a></li>
			</ul>
		</nav>
		<div class="main_header clear">
			<h2>
				<span class="invisible">これも検索エンジン対策の見出しです</span>
			</h2>

		</div>
	</header>
	<nav id="nav" class="main_nav clearfix">
		<ul>
		<li><a href="#">top</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		</ul>
	</nav>
	<main>
		<div class="gloval_main">
			<section class="contents">
                <article class="content_sentence">
                    <h2 class="mid padding20">NEWS</h2>
                    <div class="news">
                    	<ul>
                        <?php foreach($stmt AS $row): 
                        	$utime=strtotime($row['time']);
                        ?>
                        <a href="detail.php?id=<?php echo $row['id'];?>">
                            <li class="news_list">【<?php echo $row['title'];?>】----更新日時(<?php echo date('y年m月d日H時i分',$utime);?>)</li>
                        </a> 
                        
                        <?php endforeach;?>
                        
                        </ul>                 
                    </div>
                    <p>
                    DB連携練習、この新着情報の更新は管理画面<a href="admin/index.php" target="blank">admin/index.php</a>から更新できます<br>
                    ソースコードはgithubにあげています<a href="https://github.com/makotoschool/dbconnection" target="blank">https://github.com/makotoschool/dbconnection</a>
                    </p>
                </article>
				<article class="content_sentence">
                    <h2 class="mid padding40">Title</h2>
                    <p class="padding10 small">
                        <img src="http://placeimg.com/400/300/nature" alt="" class="left img_left_gutter">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.

                        
                        
                    </p>

				</article>
                <article class="content_sentence">
                    <h2 class="mid padding40">Title</h2>
                    <p class="padding10 small">
                        <img src="http://placeimg.com/400/300/people" alt="" class="right img_right_gutter">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni neque praesentium assumenda eos velit perferendis, harum, impedit doloremque reprehenderit, possimus aperiam! Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Et recusandae ullam minima repellat laborum, harum, veniam incidunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit.



                    </p>

                </article>			

			</section>


		</div>
        <section class="content_fullwidth clearfix">
            <h2 class="mid center padding40">Title</h2>
			<ul>				
                <li><h3>subtitle</h3></li>
                <li><h3>subtitle</h3></li>
                <li><h3>subtitle</h3></li>
                <li><h3>subtitle</h3></li>
			</ul>
		</section>

	</main>
	<footer>
	</footer>
</div>
</body>
</html>