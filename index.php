<?php require_once 'api/config.php'; ?>
<!DOCTYPE html>
<html lang="tr" class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <title>Tolga Er - ParamPos Ödeme Sistemi</title>
    <meta name="author" content="Tolga Er | info@tolqa.dev">
    <meta data-n-head="ssr" data-hid="description" name="description" content="">
    <meta data-n-head="ssr" data-hid="keywords" name="keywords" content="">
    <link data-n-head="ssr" rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon.png">
    <link data-n-head="ssr" rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <link data-n-head="ssr" rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="card mt-50">
    <div class="card-title mx-auto"><img src="assets/img/param.png" style="height: 80px;"></div>
    <div class="nav" style="height: 80px;">
        <ul class="mx-auto">
            <li class="active"><a href="#">Ödeme Yap</a></li>
        </ul>
    </div>
    <form  action="<?php echo $payAction;?>" method="POST">
        <div class="row-1">
            <div class="row row-2"> <span id="card-inner">Kart Sahibinin Adı</span> </div>
            <div class="row row-2"> <input type="text" id="cname" name="cardname" placeholder="Kart Sahibinin Adı" required> </div>
        </div>
        <div class="row">
            <div class="row-1">
                <div class="row row-2"> <span id="card-inner">Kart numarası</span> </div>
                <div class="row row-2"> <input type="text" id="ccnum" name="cardnumber" placeholder="Kredi Kart Numarası" maxlength="16" style="width: 342px;" required>
                    <img id="posimg" src="" style="width: 100px">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row-1">
                    <div class="row row-2"><span id="card-inner">Son Kul. Tarihi</span></div>
                    <div class="row row-2"><input type="text" id="expmonthyear" name="expmonthyear" placeholder="Ay/Yıl" minlength="5" maxlength="7" required></div>
                </div>
            </div>
            <div class="col-6">
                <div class="row-1">
                    <div class="row row-2"> <span id="card-inner">CCV</span> </div>
                    <div class="row row-2"><input type="text" id="cvv" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3" required></div>
                </div>
            </div>
        </div>
        <div class="row oranlar"></div>
        <input type="hidden" id="pos_id" name="pos_id">
        <input type="hidden" id="tutar" name="tutar" value="500"/>
        <button type="submit" class="btn d-flex mx-auto"><b>Ödeme Yap</b></button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/js/process.js"></script>
</body>
</html>
