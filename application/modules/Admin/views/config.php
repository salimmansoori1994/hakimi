<?php
$BASEURL = 'https://qrordr.com/qrordr_sandbox/';
$APIURL = 'https://sendio.online/';
$SHOPID = '42';

$SHOPLOGO = '';
$SHOPCOVER = '';
$SHOPBACKGROUNDCOLOUR = 'red';
$SHOPSECONDARYCOLOUR = '';
$SHOPBUTTONCOLOUR = '#001a57';

?>


<?php include('includeFiles/commanFuncations.php'); 

$set_url = $APIURL.'rest-api/shop/'.$SHOPID;
$shop_details = json_decode(fetch_data_from_api($set_url,'GET'));

if($shop_details->status_code != '200'){
    echo "<h2 align='center'> Shop Details Not Found. Please try again later. </h2>";
    die;
}

$SHOPCOVER = $shop_details->data->banner;


?>




<style>
    .main-page-wrapper{
        background-color: <?php echo $SHOPBACKGROUNDCOLOUR ?>;
    }
    .theme-button-one{
        background: <?php echo $SHOPBUTTONCOLOUR ?> !important;
    }
</style>