<?php
require_once "Z_WE_ASSCOCUSTOPENID_SRV_Entities.php";

try
{
    //connect
    $OData = new Z_WE_ASSCOCUSTOPENID_SRV_Entities('http://192.168.1.138:8008/sap/opu/odata/sap/Z_WE_ASSCOCUSTOPENID_SRV/')
    ;
//$OData->Credential = new WindowsCredential($_POST["userName"],$_POST["pwd"]);
    $OData->Credential = new WindowsCredential("leon","59866537");

    //Create a Customer php Object
    $Msg = Msg::CreateCustomers( $_POST["CustomerName"],$_POST["Name"],$_POST["Code"]);

    //inserting Customers object context tracking system
    $OData->AddObject('Msg', $Msg);

   //SaveChange insert the object into data service
   $OData->SaveChanges();
}
catch(ODataServiceException $exception)
{
    Echo $exception->getError();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>采购订单审核</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <h3>
        <?php
        foreach ($result as $resultx ){
            foreach ($resultx as $v){
                echo ("采购申请:" .  $v);

            }}
        ?>


        <span class="label label-success">Success</span>
</div> <!-- /container -->

</body>
</html>