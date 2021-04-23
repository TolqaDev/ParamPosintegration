<?php

$xml_data = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:s="http://www.w3.org/2001/XMLSchema" xmlns:tns="https://turkpos.com.tr/">
  <soap:Body>
    <tns:TP_Ozel_Oran_SK_Liste>
      <tns:G>
        <tns:CLIENT_CODE>'.$CLIENT_CODE.'</tns:CLIENT_CODE>
        <tns:CLIENT_USERNAME>'.$CLIENT_USERNAME.'</tns:CLIENT_USERNAME>
        <tns:CLIENT_PASSWORD>'.$CLIENT_PASSWORD.'</tns:CLIENT_PASSWORD>
      </tns:G>
      <tns:GUID>'.$GUID.'</tns:GUID>
    </tns:TP_Ozel_Oran_SK_Liste>
  </soap:Body>
</soap:Envelope>';

$ch = curl_init($_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
$xmlString = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $output);
$xml = SimpleXML_Load_String($xmlString);
$xml = new SimpleXMLElement($xml->asXML());
$parse = $xml->soapBody->TP_Ozel_Oran_SK_ListeResponse->TP_Ozel_Oran_SK_ListeResult->DT_Bilgi->diffgrdiffgram->NewDataSet->DT_Ozel_Oranlar_SK;
$oranlar = $parse[$key];
$data = '<select class="row-1" name="taksit">';
$k=0;
for($i=0;$i<12;$i++){
    $anahtar = 'MO_0';
    if($i>8){
        $anahtar = 'MO_';
    }
    $full_anahtar = $anahtar.($i+1);
    if($oranlar->$full_anahtar != "-2.0000" || $i==0){$k++;
        $odeme = $tutar+($tutar*$oranlar->$full_anahtar/100);
        $odeme = number_format($odeme,2,",",".");
        $data  .= "<option value='".($i+1)."-".$odeme."' ".($k==1?"checked":"").">".($k==1?"Tek Çekim":($i+1)." Taksit")." / ".$odeme."TL</option>";
    }
}
$data .= "</select>";
$result['table']  = $data;
$result['pos_id'] = $pos_id;
$result['img'] = ''.$oranlar->Kredi_Karti_Banka_Gorsel.'';
echo json_encode($result);