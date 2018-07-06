<!doctype html>

<html>

<head>
    <title>Flipkart API by Example - Get latest offers using API</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="styles.css" type="text/css" rel="stylesheet">
    <meta name="description" content="Flipkart API - How to use flipkart API get the latest offers running on Flipkart.Get Images, titles , description and links using Flipkart API. Create beautiful product showcase using Flipkart API.">
</head>

<body>
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://affiliate-api.flipkart.net/affiliate/offers/v1/dotd/json",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => FALSE,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Fk-Affiliate-Id: makelabsi",
    "Fk-Affiliate-Token: a0e4fa1cb2c04dbdae7aba34ad2f42ab"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$dealtitle = null;
if ($err) {
    $error = true;
} else {
        $error = false;
        $data = json_decode($response,true);
        $dotd = $data["dotdList"];
        $num = count($dotd);
        for($x=0;$x<$num;$x++){
            $dealimage[$x] = $dotd[$x]["imageUrls"][0]["url"];
            $dealtitle[$x] = $dotd[$x]["title"];
            $dealdesc[$x] =  $dotd[$x]["description"];
            $dealname[$x] = $dotd[$x]["name"];
            $deallink[$x] = $dotd[$x]["url"];
            $dealstatus[$x] = $dotd[$x]["availability"];
        }
}
?>
        <?php if($dealtitle == null): ?>
        <div class="container-fluid">
            <div class="row">

                <img src="Images/404.png" class="img-fluid m-auto">

            </div>
        </div>

        <?php endif; ?>
        <?php if($dealtitle != null): ?>
        <div class="container-fluid mt-3">
            <div class="row">
                <section>
                    <div class="container">
                        <div class="addiv">
                            <span><hr></span>
                            <a href="/instagram-downloader/" target="_blank"><img id="mobad" src="Images/instadownload300x250.jpg"></a>
                            <a href="/instagram-downloader/" target="_blank">
                        <img id="webad" src="Images/instadownload768x200.jpg"></a>
                            <span><hr></span>
                        </div>

                        <h2 id="mainhead" class="mb-2">Flipkart API in Action</h2>
                        <p>This Example uses Flipkart API to Show the Deal of the Day offers running on the website.All the data you see here are parsed from the flipkart api call.</p>

                    </div>
                    <div class="container-fluid">
                        <div class="row row-eq-height">
                            <?php foreach($dealtitle as $key=>$value): ?>
                            <div class="col-6 col-sm-4 col-md-3 col-lg-2 px-1">
                                <div class="card p-0 my-2 dealcard" style="width: 18rem;">
                                    <p class="dealstatus">
                                        <?php echo $dealstatus[$key] ?>
                                    </p>
                                    <img class="card-img-top dealimg" src="<?php echo $dealimage[$key] ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h6 class="card-title dealtitle">
                                            <?php echo $dealname[$key] ?>
                                            <?php echo $dealtitle[$key] ?>
                                        </h6>
                                        <p class="card-text dealdesc">
                                            <?php echo $dealdesc[$key] ?>
                                        </p>
                                        <a class="mobbtn" href="<?php echo $deallink[$key] ?>" target="_blank" rel="nofollow" class="card-link">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php endif; ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
