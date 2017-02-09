<!doctype html>
<html>
<head>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <?php
    if (isset($this->js))
    {
        foreach ($this->js as $js)
        {
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>
</head>
<body>

<?php Session::init(); ?>

<div id="header">
<?php
echo'<ul class="topnav" id="myTopnav">';
  $LoggedIn = Session::get('loggedIn');
  $Roles = Session::get('role');
  switch ($LoggedIn) {
    case true:
      // echo "User Logged in<br>";
      switch ($Roles) {
        case 'default':
          echo '<li><a href='.URL.'>Home</a></li>';
          echo '<li><a href='.URL.'help>Help</a></li>';
          echo '<li><a href='.URL.'note>Notes</a></li>';
          echo '<li><a href='.URL.'dashboard/logout>Logout</a></li>';
          break;
        case 'owner':
          echo '<li><a href='.URL.'>Home</a></li>';
          echo '<li><a href='.URL.'help>Help</a></li>';
//          echo '<li><a href='.URL.'register>Register</a></li>';
          echo '<li><a href='.URL.'note>Notes</a></li>';
          echo '<li><a href='.URL.'dashboard>Dashboard</a></li>';
          echo '<li><a href='.URL.'user>Users</a></li>';
          echo '<li><a href='.URL.'dashboard/logout>Logout</a></li>';
          break;
        case 'admin':
          echo '<li><a href='.URL.'>Home</a></li>';
          echo '<li><a href='.URL.'help>Help</a></li>';
          echo '<li><a href='.URL.'register>Register</a></li>';
          echo '<li><a href='.URL.'note>Notes</a></li>';
          echo '<li><a href='.URL.'dashboard>Dashboard</a></li>';
          echo '<li><a href='.URL.'dashboard/logout>Logout</a></li>';
          break;
        default:
        // echo "user is a default = ".$Roles."<br>";
          echo '<li><a href='.URL.'>Home</a></li>';
          echo '<li><a href='.URL.'help>Help</a></li>';
          echo '<li><a href='.URL.'register>Register</a></li>';
          echo '<li><a href='.URL.'login>Login</a></li>';
          break;
      }
      break;
    case false:
      // echo "User NOT Logged in<br>";
      echo '<li><a href='.URL.'>Home</a></li>';
      echo '<li><a href='.URL.'help>Help</a></li>';
      echo '<li><a href='.URL.'register>Register</a></li>';
      echo '<li><a href='.URL.'login>Login</a></li>';
      break;
    default:
      // echo "User NOT default Logged in<br>";
      echo '<li><a href='.URL.'>Home</a></li>';
      echo '<li><a href='.URL.'help>Help</a></li>';
//      echo '<li><a href='.URL.'register>Register</a></li>';
      echo '<li><a href='.URL.'login>Login</a></li>';
      break;
  }
  echo'<li class="icon">
  <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
</li>';

  echo'</ul>';
?>
</div>

<div id="content">
