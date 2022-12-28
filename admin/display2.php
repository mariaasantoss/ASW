<?php
include("table.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>ReFood FCUL</title>
	<link rel="icon" type="image/png" href="./images/logo2.png"/>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Unica+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Unica+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../main_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="w3-top">

<div class = " w3-bar w3-white w3-padding w3-card w3-dark-gray" style = "letter-spacing:4px; "; >
  <a  href="../main.html"><img src="../images/logo.png" width="120" height="50"></a> 
 
  <div class="w3-right w3-hide-small">
  
  <a href="../sobre.html" class="w3-bar-item w3-button">Sobre</a>
  <a href="../Register/register.html" class="w3-bar-item w3-button">Registar</a>
  <a href="../Login_v1/index.html" class="w3-bar-item w3-button">Login</a>    

  </div>
</div>

 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive"  class="tabela-admin">
      <table id="tabela" class="table table-bordered"  width="800" height="100" >
       <thead><th style= background-color:#C0C0C0>Admin</th>

         <th style= background-color:#C0C0C0 id = "one">email</th>
         <th style= background-color:#C0C0C0 id = "one">nome</th>
         <th style= background-color:#C0C0C0 id = "one">genero</th>
         <th style= background-color:#C0C0C0 id = "one">CC</th>
         <th style= background-color:#C0C0C0 id = "one">pass</th>
         <th style= background-color:#C0C0C0 id = "one">nrTele</th>
         <th style= background-color:#C0C0C0 id = "one">concelho</th>
         <th style= background-color:#C0C0C0 id = "one">freguesia</th>
         <th style= background-color:#C0C0C0 id = "one">distrito</th>
         <th style= background-color:#C0C0C0 id = "one">nrCartaCon</th>
         <th style= background-color:#C0C0C0 id = "one">foto</th>
         <th style= background-color:#C0C0C0 id = "one">dataNasc</th>
         

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
</body>
</html>