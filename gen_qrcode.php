<?php
/**
 *
 * @filesource   svg.php
 * @created      21.12.2017
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2017 Smiley
 * @license      MIT
 */

namespace chillerlan\QRCodeExamples;

use chillerlan\QRCode\{QRCode, QROptions};

require_once __DIR__.'/vendor/qrcode_autoload.php';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$data = "name:".$name.";"."lastname:".$lastname.";"."address:".$address.";"."phone:".$phone.";";

$options = new QROptions([
	'version'      => 20,
	'outputType'   => QRCode::OUTPUT_MARKUP_SVG,
	'eccLevel'     => QRCode::ECC_L,
	'scale'        => 5,
	'addQuietzone' => true,
	'svgOpacity' => 0.8,
]);

#header('Content-type: image/svg+xml');

// echo (new QRCode($options))->render($data);
$qrcode = new QRCode($options);

// and dump the output
echo $qrcode->render($data);




