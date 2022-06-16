<?php
  $arr=[
    "india"=>["cap"=>"delhi","ng"=>"hockey"],
    "usa"=>["cap"=>"wasignton","ng"=>"baseball"],
    "england"=>["cap"=>"london","ng"=>"cricket"],
    "sd"=>["cap"=>"sd","ng"=>"sd"]
  ];
?>
<!Doctype html>
<html>
    <body>
        <h2> Details </h2>
        <table border="1">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th> Country </th>
                    <th> Capital </th>
                    <th> Ngame</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sno=1;
                 foreach($arr as $i=>$val){
                   ?>
                     <tr>
                         <td><?= $sno;?></td>
                         <td><?= $i;?></td>
                         <?php 
                           foreach($val as $v){
                               ?>
                               <td> <?= $v;?> </td>
                               <?php
                           }
                         ?>
                     </tr>
                   <?php
                   $sno++;
                 }
                ?>
            </tbody>
        </table>
    </body>
</html>