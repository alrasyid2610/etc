<?php

  include "functions.php";
  $data = get_data_taks();
  $no = 1;

  while($datas = mysqli_fetch_assoc($data)):
?>
    <tr class="w-100">
      <th scope="row" style="width: 4%;"><?= $no; ?></th>
      <td style="width: 60%;"><?= $datas['taks']; ?></td>
      <td style="width: 20%;"><?= $datas['deadline']; ?> </td>
      <td style="width: 15%;">Progres</td>
    </tr>
<?php
  $no++;
  endwhile;
?>