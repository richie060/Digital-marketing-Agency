<?php
include ('../../path.php');

include ('../../Admin/db.php');

include('topics.php'); 

$post = array();
$post= getPublishedPost();
$postTitle = 'Recent post';

if(isset($_GET['t_id'])){
  $post= getPostByTopicid($_GET['t_id']);
  $postTitle ="You searched for post under '"  . $_GET['name'] . " ' ";
  // dd($postss); 
 }
else if(isset($_POST['search-term'])) {
	$postTitle ="You searched for '"  . $_POST['search-term'] . " ' ";
	$post = searchPost($_POST['search-term']);
}else{
	$post = getPublishedPost();
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Blogs</title>
</head>
<body>
	<!-- NAVBAR -->
  <div>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="<?php echo BASE_URL . '/index.php' ?>"> <span style="color: yellow;">Dig</span>ital</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
        <li>
          <a href="#" class="desktop-item">Services</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Services</label>
          <ul class="drop-menu">
            <li><a href="<?php echo BASE_URL . '/about/services/social_media.php' ?> ">Social media marketing</a></li>
            <li><a href="<?php echo BASE_URL . '/about/services/seo.php' ?>">Search engine Optimization</a></li>
            <li><a href="<?php echo BASE_URL . '/about/services/content.php' ?>">Content marketing</a></li>
             <li><a href="<?php echo BASE_URL . '/about/services/web_design.php' ?>">Web Design</a></li>
            <li><a href="<?php echo BASE_URL . '/about/services/strategy.php' ?>">Digital marketing strategy</a></li>
          </ul>
        </li>
        <li><a href="../contactus/contactus.php">Contact Us</a></li>
        <li><a href="blog.php">Blogs</a></li>
         <li><a href="<?php echo BASE_URL . '/Admin/login.php' ?>">Admin</a></li>

      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>
<div class="bodsizing">
  
</div>

	<div class="bodtitle">
  <h>Latest<span>Blogs</span></h>
   <p style=" color=red;">Reasons Internet Marketing Agency is a full-service digital marketing agency.<br>Attract, Impress,
  <br>
  and Convert more leads online and get results with Reasons <br></p>
  <div class="btnset">
    <button class="btn1"><span>Subscribe to our Blogs</button>
    </div>
</div>
	<div class="content clearfix">
		<div class="main-content">
			<h2 class="recent-post-title"><?php echo $postTitle; ?></h2>

      <?php foreach ($post as  $post): ?>
     <div class="post clearfix">
				<img src="<?php echo BASE_URL . '/images/' . $post['image']; ?>" alt="" class="post-image">
				<div class="post-preview">
					<h2><a href="single.php?id=<?php echo $post['id']; ?>" ><?php echo $post['title']; ?></a></h2>
					<i class="fas fa-user"><?php echo $post['username']; ?></i>&nbsp;
					<i class="far calender"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
					<p class="preview-text">
						<?php echo html_entity_decode(substr($post['body'],0,310) .  '...' ) ; ?>
					 </p>
					<a href="single.php?id=<?php echo $post['id']; ?>" class="btn readmore">Read More</a>
				</div>
			</div> 
			<?php endforeach ?>	
		</div>
		<div class="sidebar section">
			<div class="section search" style="width:300px;">
				<h2 class="section-title">Search</h2>
				<form method="post" action="#">
				<input type="text" name="search-term" class="text-input" placeholder="Search...">
			</form>
			</div>

			
			<div class="section topics">
				<h2 class="section-title">Topics</h2>
				<ul>
					<?php foreach ($topics as $key => $topic): ?>
						<li><a href="<?php echo BASE_URL . '/about/blogs/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a></li>
          <?php endforeach ?>

			<!-- 		<li><a href="#">Poems</a></li>
					<li><a href="#">Social Media marketing</a></li>
					<li><a href="#">Content Marketing</a></li>
					<li><a href="#">Multivation</a></li>
					<li><a href="#">Life on Top</a></li>
					<li><a href="#">Meditation</a></li> -->
				</ul>
			</div>
				</div>
	</div>



<!-- footer -->
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h1 class="logo-text"><span>Dig</span>ital</h1>
        <p>Reasons Internet Marketing Agency is a full-service digital marketing agency. Attract, Impress, and Convert more leads online and get results with Reasons.
      </p>
      <div class="contact">
        <span><i class="fas fa-phone"></i>&nbsp;071840400</span>
        <span><i class="fas fa-envelope"></i>&nbsp;reasonsdigital@gmail.com</span>

      </div>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
     <div class="footer-section links">
       <h2>Quick links</h2>
       <br>
       <ul>
       <a href="<?php echo BASE_URL . '/index.php' ?>"><li>Home</li></a>
         <a href="#"><li>Services</li></a>
         <a href="<?php echo BASE_URL . '/about/contactus/contactus.php' ?>"><li>Contact Us</li></a>
         <a href="<?php echo BASE_URL . '/about/blogs/blog.php' ?>"><li>Blogs</li></a>
         <a href="#"><li>Privacy policy</li></a>
       </ul>
     </div>
     <div class="footer-section contact-form" >
       <h2>Contact us</h2>
       <br>
       <form action="blog.php" method="post">
         <input type="email" name="email" class="text-input contact-input" style="width: 100%;" placeholder="Your email address.....">

         <textarea name="message" class="text-input contact-input" style="width: 100%;"  placeholder="Type your message here....."></textarea>

         <button type="submit" name="sendmessage" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i> Send</button>
       </form>
     </div>
  </div>
    <div class="footer-bottom">&copy; Reasons | All rights reserved</div>

</div>


</body>
</html>