<?php
$json = file_get_contents('data.json');
$json = json_decode($json, true);
$keys = array('firstName','lastName','address','phoneNumber');
?>
<meta charset="utf-8">
<table border="1">
  <tr>
    <td><strong>Имя</strong></td>
    <td><strong>Фамилия</strong></td>
    <td><strong>Адрес</strong></td>
    <td><strong>Телефон</strong></td>
  </tr>
  <?php foreach ($json as $person) {?>
    <tr>
      <?php foreach ($keys as $value) {
        echo "<td>$person[$value]</td>";
      }?>
    </tr>
  <?php }?>
</table>
