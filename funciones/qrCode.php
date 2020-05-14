<?php 

   	use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

	function generateQr($id) {
		
		$qrcode = new BaconQrCodeGenerator;
	    $code = base64_encode($qrcode->format('png')
	    ->size(300)
	    ->backgroundColor(255,255,0)
	    ->generate('https://encuestas.idex.cc/encuesta-IDEX/EVALUACION%20ASESOR/1/'.$id));
	    return $code;
	}

?>