<!doctype html>
<html>
<head>
  <?php echo "This is url ".__LINE__."<br>";?>
    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
</head>
<body>

<div id="content">
