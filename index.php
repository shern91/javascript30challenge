<?php
    $videos = array(
      1 => 'JavaScript Drum Kit',
      2 => 'CSS + JS Clock',
      3 => 'Playing with CSS Variables and JS',
      4 => 'Array Cardio Day',
      5 => 'Flex Panels Image Gallery',
      6 => 'Ajax Type Ahead',
      7 => 'Array Cardio Day 2',
      8 => 'Fun with HTML5 Canvas',
      9 => '4 Must Know Dev Tools Tricks',
      10 => 'Hold Shift to Check Multiple Checkboxes',
      11 => 'Custom HTML5 Video Player',
      12 => 'Key Sequence Detection (KONAMI CODE)',
      13 => 'Slide In on Scroll' 
    );
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="javascript" content="JavaScript30Challenge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JavaScript30Challenge Index</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style type="text/css">
      body{
        padding-top: 40px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>JavaScript30 Demo</h1>
        <p>I will upload once a done a tutorial. Thank for visit!</p>
        </div>
      <div class="table">
        <table class="table table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Description for Tutorial</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php  foreach ($videos as $key => $video) : ?>
          <tr>
            <td><?= $key ?></td>
            <td><?= $video ?></td>
            <td><a class="btn btn-primary btn-xs btn" href="./video<?= $key ?>/" target="_blank" role="button">View</a></td>
          </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
