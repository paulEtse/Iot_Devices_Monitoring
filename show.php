<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Modules IOT</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="script.js"></script>
  </head>
  <body>
    <?php

    ?>
    <p>
      <button type="button" onclick="location.href = 'add.php';"  class="btn btn-success submit-button" on>+ Add </button>
    </p>
<p>
    <div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">

          <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Type</th>
              <th>Etat</th>
              <th class="col-xs-0">Description</th>
              <th >Details</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <?php 
              require_once 'main.php';
              echo getModules(); 
            ?>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
      <!--Section: Live preview-->
      <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
  </body>