<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $logikaand1 = false && false ;
    $logikaand2 = false && true ;
    $logikaand3 = true && false ;
    $logikaand4 = true && true ;

    $logikaor1 = false or false ;
    $logikaor2 = false or true ;
    $logikaor3 = true or false ;
    $logikaor4 = true or true ;

     ?>
    <p>Table Logika 1111 <br></p>
    <table border="1px">
      <tr>
        <td>Input true</td>
        <td>input 2</td>
        <td>AND</td>
        <td>OR</td>
      </tr>
      <tr>
        <td>false</td>
        <td>false</td>
        <td><?php
              if ($logikaand1 == 1) {
                echo "1";
              }else {
                echo "0";
              }
            ?>
        </td>
        <td><?php
              if ($logikaor1 == 1){
                echo "1";
              }else {
                echo "0";
              }
            ?>
        </td>
      </tr>
      <tr>
        <td>false</td>
        <td>true</td>
        <td><?php
              if ($logikaand2 == 1) {
                echo "1";
              }else {
                echo "0";
              }
            ?>
        </td>
        <td><?php
              if ($logikaor2 == 0){
                echo "1";
              }else {
                echo "0";
              }
            ?>
        </td>
      </tr>
      <tr>
        <td>true</td>
        <td>false</td>
        <td>
              <?php
              if ($logikaand3 == 1) {
                echo "1";
              }else {
                echo "0";
              }
               ?>
        </td>
        <td>
              <?php
                if ($logikaor3 == 1) {
                  echo "1";
                }else {
                  echo "0";
                }
               ?>
        </td>
      </tr>
      <tr>
        <td>true</td>
        <td>true</td>
        <td>
              <?php
                if ($logikaand4 == 1) {
                  echo "1";
                }else {
                  echo "0";
                }
               ?>
        </td>
        <td>
              <?php
                if ($logikaor4 == 1) {
                  echo "1";
                }else {
                  echo "0";
                }
               ?>
        </td>
      </tr>
    </table>
  </body>
</html>
