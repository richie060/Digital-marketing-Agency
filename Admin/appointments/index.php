<?php include ('../server.php');

// if user not logged in cannot access the home page

if (empty($_SESSION['username'])) {
  header('location: ../login.php');
  // code...
}

?>
<?php include ('appointment.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--  <link rel="stylesheet" href="../../css/style.css">
 -->    <link rel="stylesheet" href="../admi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <!-- NAVBAR -->   
  <div class="wrapper">
      <div class="logo"><a href="index.html"> <span style="color: yellow;">Dig</span>ital</a></div>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        <div class="contentadmin">
    <?php if (isset($_SESSION['success'])):?> 
      <div class="error success">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
          ?>
        </h3>
      </div>
  <?php endif ?>
    <?php if (isset($_SESSION["username"])): ?> 
      <p style="color:yellow;">Welcome    <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>
  </div>
    </div>

  <div>
  </div>
<div class="admin-wrapper">
  <div class="left-sidebar" >
  <ul>
        <li><a href="../appointments/index.php">Manage Appointments</a></li>
    <li><a href="../subscriptions/index.php">Manage Subscription </a></li>
    <li><a href="../messages/index.php">Manage Messages </a></li>
    <li><a href="index.php">Manage Posts</a></li>
    <li><a href="../topics/index.php">Manage Topics</a></li>
  </ul>
   </div>
  <div class="admin-content " >
<div class="button-group"> 
<a href="../../sendemail.php" class="btn btn-big btn-primary">Reply All</a>
<a href="../../sendemail.php" class="btn btn-big btn-primary">Accept All</a>
 </div>
 <div class="content"  >
   <h2 class="page-title">Manage Appointments</h2>
   <table class="table table-outline-success" style="width: 100%; ">
    <thead>
    <th>Name</th>
     <th>Email</th>
     <th>Phone Number</th>
     <th>Company Name</th>
     <th>Business Name</th>
     <th>Link</th>
     <th>Message</th>
     <th>Schedule Appointment or Decline</th>
   
     
   </thead>
   <tbody>
     <?php foreach ($post as $key => $post): ?>
     <tr>
      <td><?php echo $post['name'];  ?></td>
      <td><?php echo $post['email'];  ?></td>
      <td><?php echo $post['phoneno'];  ?></td>
      <td><?php echo $post['companyname'];  ?></td>
      <td><?php echo $post['businessname'];  ?></td>
      <td><?php echo $post['link'];  ?></td>
      <td><?php echo $post['messages'];  ?></td>
      <td><a href="mail.php?id=<?php echo $post['id'] ?>" class="edit">Accept</a></td>
      <td><a href="mail.php?id=<?php echo $post['id'] ?>" class="delete">Decline</a></td>
   
  
     </tr>
     <?php endforeach ?>
     

   </tbody>
   </table>
 </div>


   </div>
  </div>
</body>
</html> 