<!DOCTYPE html>

<html>

<body>
<header>
  <link rel="stylesheet" href="styling.css">
  <h1> The football vlog </h1>
</header>



<div class="wrapper">
	
<form action="homepage.php" method="post">

 <nav>
	  <div class="wrapper">
	  <ul>
	  <li><a href="homepage.php">Home</a></li> 
		  <li><a href="post.php">Post</a></li>
		  <li><a href="https://www.google.com/search?q=premier+league+table&oq=premier+lea&aqs=chrome.3.0i67i131i355i433j46i67i131i433j69i57j0i20i131i263i433j0i131i433j0i271j69i60l2.2517j0j15&sourceid=chrome&ie=UTF-8#sie=lg;/g/11j4y8fvpd;2;/m/02_tc;st;fp;1;;">League table</a></li>
		</ul>
	  </div>
 </nav>

</div>

<div class="container">
	<input type = 'button' onclick = 'refresh()' value = 'refresh the feed' > 
	


</div>


<div class="imagecontainer">

<img src="homeimage.jpg" alt="The image will not load!" name="image" width="400px" height="400px"/>


		
</div


</body>

<div class="footer">
<footer>
  <p> Created by James Standing and Alex Palmer</p>
</footer>
</div>

<script>
    let refresh = () => {
        let ele = document.getElementById('container');
        ele.innerHTML += '$article';
    }
</script>


</html>



<?php
	
	$article = $_POST['userpost']

?>


