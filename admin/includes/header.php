<?php 
    if($_SESSION['user_admin'] != 1){
        header("Location: ../index.php");
    }
?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SUMMERNOTE LITE  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- CUSTOM CSS FILES -->
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/news.css" />
    <link rel="stylesheet" href="css/create-news.css">
    <link rel="stylesheet" href="css/likes.css">
    <title>CMS Admin</title>
</head>
<body>
    