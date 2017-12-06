<html>
<head>
<title>Share Board</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">ShareBoard</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
      <li><a href="<?php echo ROOT_URL . 'shares'; ?>">Shares</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo ROOT_URL . 'login'; ?>">Login</a></li>
      <li><a href="<?php echo ROOT_URL . 'register'; ?>">Register</a></li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
    <?php require($view) ?>
    </div>
</div>
</body>
</html>