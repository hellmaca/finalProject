<!DOCTYPE html>
<html>
<head>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <title>Behavior Tracking</title>
</head>
<body>
  <div class="container">
      <div id="top">
        <div>
          <img alt="LI logo" src ="../logo.jpg"/>
        </div>
        <?php if (!empty($_SESSION["id"])): ?>
          <ul class="nav nav-pills">
            <li><a href="behavior.htm">Behavior</a></li>
            <li><a href="incident.php">Incident</a></li>
            <li><a href="award.php">Commend</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        <?php endif ?>
      </div>
      <div id="middle">
