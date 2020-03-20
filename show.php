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
    <div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped">

          <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Nom</th>
              <th>Type</th>
              <th>Description</th>
              <th>Etat</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <?php 
              require_once 'main.php';
              echo getModules(); 
            ?>
            <tr>
              <th scope="row">1</th>
              <td>Kate</td>
              <td>Moss</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
            <tr>
              <th scope="row">2</th>
              <td>Anna</td>
              <td>Wintour</td>
              <td>USA / The United Kingdom / China / Russia </td>
              <td>New York City / Warsaw / Lodz / Amsterdam / London / Chicago</td>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
      <!--Section: Live preview-->
  </body>