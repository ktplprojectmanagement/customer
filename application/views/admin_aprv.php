<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appraiser Email</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://kritvainvestments.com/pmsuser/css/email.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

a:hover {
    color: red;
}
div{
  line-height: 40px;
}
hr
{
  border: 2px solid #747272;
}
a{
   text-decoration: underline;
}
label{
  font-weight: bold;
}

  </style>
</head>
<body>

<div class="container">
  <div class="logo">
<img src="http://vvf.kritva.in/images/Logo.png" alt="VVF" style="width:72px;max-width:72px">
<hr >
  </div>
Dear Business Partner ,<br>

Customer ID : <?php if(isset($Vendor_id)) { echo $Vendor_id; } ?><br> 
Customer Name : <?php if(isset($name)) { echo $name; } ?><br>
Customer is approved by Indirect tax.<br>
Regards,<br>
VVF GST Team
</div>

</body>
</html>

