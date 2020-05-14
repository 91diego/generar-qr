<?php 
	
	function saveCode($id, $qr) {

		// URL PARA ACTUALIZAR EL DEAL
	    $updateDeal = 'https://intranet.idex.cc/rest/117/w0qdwl5fbr0hpuf1/crm.deal.update?ID='.$id;
	    $queryData =  http_build_query(

	        array(

	            "ID" => $id,
	            "fields" => array(
	                "UF_CRM_1589138577" => $qr
	            ),
	            "params" => array("REGISTER_SONET_EVENT" => "Y")
	        )
	    );

	    $curl = curl_init();
	    curl_setopt_array($curl, array(

	        CURLOPT_SSL_VERIFYPEER => 0,
	        CURLOPT_POST => 1,
	        CURLOPT_HEADER => 0,
	        CURLOPT_RETURNTRANSFER => 1,
	        CURLOPT_URL => $updateDeal,
	        CURLOPT_POSTFIELDS => $queryData
	    ));

	    $result = curl_exec($curl);
	    curl_close($curl);
	    $result = json_decode($result, 1);
	    return $result;
	}


?>