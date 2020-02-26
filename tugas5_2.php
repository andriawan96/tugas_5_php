<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Operator String</h1>
    <table border="1px">
      <?php
        $ayo = "Ayo ";
        $belajar = "Belajar";
        $gabung1 = $ayo.$belajar;

        $bersama = "Bersama ";
        $niomic = "Niomic";
        $gabung2 = $bersama.$niomic;
       ?>
      <tr>
        <td>Input 1</td>
        <td>Input 2</td>
        <td>Hasil</td>
      </tr>
      <tr>
        <td>Ayo</td>
        <td>Belajar</td>
        <td><?php echo "$gabung1"; ?></td>
      </tr>
      <tr>
        <td>Bersama</td>
        <td>Niomic</td>
        <td><?php echo "$gabung2"; ?></td>
      </tr>
    </table>
  </body>
</html>
