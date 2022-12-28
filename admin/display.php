<?php
include("table.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Admin</th>

         <th>email</th>
         <th>nome</th>
         <th>genero</th>
         <th>CC</th>
         <th>pass</th>
         <th>nrTele</th>
         <th>concelho</th>
         <th>freguesia</th>
         <th>distrito</th>
         <th>nrCartaCon</th>
         <th>foto</th>
         <th>dataNasc</th>
         

    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['nome']??''; ?></td>
      <td><?php echo $data['genero']??''; ?></td>
      <td><?php echo $data['CC']??''; ?></td>
      <td><?php echo $data['pass']??''; ?></td>
      <td><?php echo $data['nrTele']??''; ?></td>
      <td><?php echo $data['concelho']??''; ?></td>
      <td><?php echo $data['freguesia']??''; ?></td>
      <td><?php echo $data['distrito']??''; ?></td>  
      <td><?php echo $data['nrCartaCon']??''; ?></td>
      <td><?php echo $data['foto']??''; ?></td>
      <td><?php echo $data['dataNasc']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>