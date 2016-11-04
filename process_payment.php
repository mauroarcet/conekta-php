<?php
require_once("./lib/Conekta.php");
Conekta::setApiKey("key_VVnpHXP7asg5BBdzRcTFcg");


	try {
		$charge = Conekta_Charge::create(array(
		  'description'=> 'Stogies',
		  'reference_id'=> '9839-wolf_pack',
		  'amount'=> 20000,
		  'currency'=>'MXN',
		  'card'=> 'tok_test_visa_4242',
		  'details'=> array(
		    'name'=> 'Arnulfo Quimare',
		    'phone'=> '403-342-0642',
		    'email'=> 'logan@x-men.org',
		    'customer'=> array(
		      'corporation_name'=> 'Conekta Inc.',
		      'logged_in'=> true,
		      'successful_purchases'=> 14,
		      'created_at'=> 1379784950,
		      'updated_at'=> 1379784950,
		      'offline_payments'=> 4,
		      'score'=> 9
		    ),
		    'line_items'=> array(
		      array(
		        'name'=> 'Box of Cohiba S1s',
		        'description'=> 'Imported From Mex.',
		        'unit_price'=> 20000,
		        'quantity'=> 1,
		        'sku'=> 'cohb_s1',
		        'type'=> 'food'
		      )
		    ),
		    'billing_address'=> array(
		      'street1'=>'77 Mystery Lane',
		      'street2'=> 'Suite 124',
		      'street3'=> null,
		      'city'=> 'Darlington',
		      'state'=>'NJ',
		      'zip'=> '10192',
		      'country'=> 'Mexico',
		      'phone'=> '77-777-7777',
		      'email'=> 'purshasing@x-men.org'
		    )
		  )
		));
	} catch (Conekta_Error $e) {
		echo $e->message_to_purchaser;
		var_dump($charge->status);
	}
