Update the query with meta field - 
 
$today = date( 'Ymd' );

    $query['meta_query'] = array(
	    array(
	      'key' => 'enter_date',
	      'value' => $today,
	      'compare' => '>='
	    )
	);
