
<?php

require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \mPDF();([
    'default_font_size' => 10,
    'default_font' => 'sarabun'
]);

$mpdf->SetImportUse();
$mpdf->SetDocTemplate('MN_WOEKSHEET.pdf',true);

$mpdf->WriteFixedPosHTML('<p style="font-size:18px">MAINTENANCE WORKSHEET<p>', 80, 6, 100, 50);
$mpdf->WriteFixedPosHTML('<p style="font-size:18px">ใบงานบำรุงรักษา<p>', 88, 16, 100, 50);
$mpdf->WriteHTML('<div style="margin-left: 2mm; font-size:16px; padding-top:3px;">บริษัท ทีบีเคเค (ประเทศไทย) จำกัด</div>');
$mpdf->WriteHTML('<div style="margin-left: 2mm; font-size:16px; padding-top:-3px;">TBKK (THAILAND) CO.,TH</div>');
$mpdf->WriteHTML('<div style="margin-left: 27rem; font-size:16px;margin-top:2.5rem ">Date :</div>');
$mpdf->WriteHTML('<div style="margin-left: 27rem; font-size:16px;margin-top:1.5rem ">Time :</div>');
$mpdf->WriteHTML('<div style="margin-left: 27rem; font-size:16px;margin-top:3.5rem ">Time :</div>');
$mpdf->WriteHTML('<div style="margin-left: 27rem; font-size:16px;margin-top:2.8rem ">Time :</div>');

$apiUrl = 'http://192.168.161.219/APITicket_WEB/Ticket_control/radio_jobtype';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

$initialX = 157;
$initialY = 55;
foreach ($data as $index => $item) {
    $id = $item['mjt_id'];
    $name_eng = $item['mjt_name_eng'];
    $name_thai = $item['mjt_name_thai'];
    $x = $initialX;
    $y = $initialY + $index * 8;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input  type="checkbox" id="' . $id . '" name="' . $id . '" value="' . $id . '" checked>
    <label for="' . $id . '">' . $name_thai . '<br>' . $name_eng . '</label>');
}


$apiUrl = 'http://192.168.161.219/APITicket_WEB/Ticket_control/chkBox_problem';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

$initialX = 22;
$initialY = 85;
foreach ($data as $index => $item) {
    $id = $item['mpc_id'];
    $mpc_name_thai = $item['mpc_name_thai'];
    $x = $initialX;
    $y = $initialY + $index * 4;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input  type="checkbox" id="' . $id . '" name="' . $id . '" value="' . $id . '" checked>
    <label for="' . $id . '">' . $mpc_name_thai . '</label>');
}

$apiUrl = 'http://192.168.161.219/APITicket_WEB/Ticket_control/chkBox_inspection';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);


$initialX = 22;
$initialY = 136;
foreach ($data as $index => $item) {
    $id = $item['mim_id'];
    $mim_name_thai = $item['mim_name_thai'];
    $x = $initialX;
    $y = $initialY + $index * 4;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input type="checkbox" name="checkbox_' . $id . '" value="1" > ' . $mim_name_thai);
}

$apiUrl = 'http://192.168.161.219/APITicket_WEB/Issue_Ticket/chkBox_analysis';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

$initialX = 75;
$initialY = 192;
foreach ($data as $index => $item) {
    $id = $item['map_id'];
    $map_name = $item['map_name'];
    $x = $initialX;
    $y = $initialY + $index * 4;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input type="checkbox" name="checkbox_' . $id . '" value="1" > ' . $map_name);
}

$apiUrl = 'http://192.168.161.219/APITicket_WEB/Issue_Ticket/chkBox_delivery';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

$initialX = 19;
$initialY = 245;
foreach ($data as $index => $item) {
    $id = $item['mde_id'];
    $mde_name = $item['mde_name'];
    $x = $initialX;
    $y = $initialY + $index * 4;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input type="checkbox" name="checkbox_' . $id . '" value="1" > ' . $mde_name);
}

$apiUrl = 'http://192.168.161.219/APITicket_WEB/Issue_Ticket/chkBox_trouble1';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

$initialX = 115;
$initialY = 136;
foreach ($data as $index => $item) {
    $id = $item['mt_id'];
    $mt_name_thai = $item['mt_name_thai'];
    $x = $initialX;
    $y = $initialY + $index * 4;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input type="checkbox" name="checkbox_' . $id . '" value="1" > ' . $mt_name_thai);
}


$apiUrl = 'http://192.168.161.219/APITicket_WEB/Issue_Ticket/chkBox_trouble2';

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$data = json_decode($response, true);

$initialX = 145;
$initialY = 136;
foreach ($data as $index => $item) {
    $id = $item['mt_id'];
    $mt_name_thai = $item['mt_name_thai'];
    $x = $initialX;
    $y = $initialY + $index * 4;

    $mpdf->SetXY($x, $y);
    $mpdf->WriteHTML('<input type="checkbox" name="checkbox_' . $id . '" value="1" > ' . $mt_name_thai . ' .............................');
}
// $mpdf->SetLeftMargin(50);
$mpdf->Output();
?>