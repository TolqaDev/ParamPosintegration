# TR ParamPos (TurkPos) PHP RestAPI Entegrasyon

<b>Kullanılan Altyapılar</b>
- HTML
- CSS3
- JavaScript
- PHP 7.4.16
- SOAP xml
- Curl API

Curl API Kullanıcı bilgilerinizi, config.php dosyası üzerinde yer alan kısımdan düzenleyerek gerçek oratama geçiş yapabilirsiniz.
- Test Ortamı Config Yapısı
```
$_url = 'https://test-dmz.param.com.tr:4443/turkpos.ws/service_turkpos_test.asmx'; // ParamPos (TurkPos) Test Ortam Linki

$GUID            = '0c13d406-873b-403b-9c09-a5766840d98c'; // GUID Kodunuzu tırnak içerisine yazmanız gerekmektedir.
$CLIENT_CODE     = 10738;                                  // Client Kodunuzu tırnak içerisine yazmanız gerekmektedir.
$CLIENT_USERNAME = 'Test';                                 // Client Kullanıcı adınızı tırnak içerisine yazmanız gerekmektedir.
$CLIENT_PASSWORD = 'Test';                                 // Client Şifrenizi tırnak içerisine yazmanız gerekmektedir.
$MODE            = 'Test';                                 // 'PROD' Gerçek Ortam, Test Sanal Ortam
```

- Gerçek Ortam Config Yapısı
```
$_url = 'https://posws.param.com.tr/turkpos.ws/service_turkpos_prod.asmx';  // ParamPos (TurkPos) Gerçek Ortam Linki

$GUID            = ''; // GUID Kodunuzu tırnak içerisine yazmanız gerekmektedir.
$CLIENT_CODE     = ;   // Client Kodunuzu tırnak içerisine yazmanız gerekmektedir.
$CLIENT_USERNAME = ''; // Client Kullanıcı adınızı tırnak içerisine yazmanız gerekmektedir.
$CLIENT_PASSWORD = ''; // Client Şifrenizi tırnak içerisine yazmanız gerekmektedir.
$MODE            = ''; // 'PROD' Gerçek Ortam, Test Sanal Ortam
```
Belirtilen dosya dışında oynama yapmanız sistemin işleyişini mozması mümkündür.
<br>Dosya içeriklerinde veya yapısında değişiklik yapacaksanız lütfen konu hakkında bilgi sahibi olduğunuzdan emin olun!
<br><br> Test ortamı için <a href="https://parampos.tolqa.dev">TIKLAYINIZ</a>
# EN ParamPos (TurkPos) PHP RestAPI integration

Coming Soon........
