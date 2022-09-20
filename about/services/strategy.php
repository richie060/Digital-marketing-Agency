
<?php
//  include('topics.php');
 include ('../../path.php'); 
 include('../blogs/post.php'); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Digital marketing Strategy | Richie</title>
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
        <li><a href="<?php echo BASE_URL . '/about/contactus/contactus.php' ?>">Contact Us</a></li>
        <li><a href="<?php echo BASE_URL . '/about/blogs/blog.php' ?>">Blogs</a></li>
         <li><a href="<?php echo BASE_URL . '/Admin/login.php' ?>">Admin</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>
<div class="bodsizing">
</div>

<!-- Main content -->
	<div class="content clearfix">
		<div class="main-content single">
			<h2 class="post-title">Digital  Marketing Strategy</h2>
      <div class="post-content">

        <p>Computerized management system is a generic term used to describe application
           of computer hardware and software used to manage orphanage.</p>

          <p >Computerized management system is a generic term used to describe application
           of computer hardware and software used to manage orphanage.  </p>

           <p >Computerized management system is a generic term used to describe application
           of computer hardware and software used to manage orphanage.  </p>
          
           <p> Orphanage is the name
            to describe a residential institution devoted to the care of orphans- children  </p>
          
          <p>Computerized management system is a generic term used to describe application
           of computer hardware and software used to manage orphanage.  children whose parents  </p>
   
          <p>Computerized management system is a generic term used to describe application
           of computer hardware and software used to manage orphanage.  children whose parents  </p>

           
           <button class="btn btn-success" name="booking" type="submit" style="margin: 10px auto; float:right;  ">Book Appointment Now With Us Now</button>
      </div>
		</div>

		<div class="sidebar single">
    <div class="section popular">
        <h2 class="section-title">Popular </h2>
        
           <?php foreach ($post as $p): ?>
        <div class="post clearfix">
          <img src="<?php echo BASE_URL . '/images/' . $p['image']; ?>" alt="">
           <a href="../blogs/single.php?id=<?php echo $p['id']; ?>" class="title" ><?php echo $p['title']; ?></a>
        </div>
        <?php endforeach;  ?>
    </div>
    
<!-- //Main content -->
			<div class="section topics">
				<h2 class="section-title single" >Topics</h2>
				     <ul>
					    <?php foreach ($topics as $topic): ?>
						  <li>
                  <a href="<?php echo BASE_URL .  '/about/blogs/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a>
              </li>
              <?php endforeach; ?>
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