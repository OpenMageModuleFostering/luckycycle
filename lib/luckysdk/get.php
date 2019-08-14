<a href="get.php">SHOW</a> | <a href="poke.php">POKE</a> | <a href="draw.php">DRAW</a>
<hr />

<?php

require_once './lucky.php';

$api_key = '90efb718602b07e9fa52fbbc0ad9e578';

if (isset($_GET['operation_id'])) {

	$op = $_GET['operation_id'];
	$api_key = $_GET['api_key'];

	if ($op) {

//		$req = new LuckyCycleApi('http://localhost:3000);
        $req = new LuckyCycleApi('https://www.luckycycle.com'); // use PRODUCTION URL to test
		$req->setApiKey($api_key);
		$req->setOperationId($op);

		//$data = array();
		//$headers = array( 'X-LuckyApiKey'  =>  $api_key );
		//$path = '/api/v1/operations/' . $op . '/show';
		//$poke = $req->get( $path , $data, $headers );
// email
        // I have run the sample code from the SDK of lucky.
        // I need additional info to get it running.
        // Can you provide me the API KEY and the Operation_id to have the sample working?



		$poke = $req->show();

	}
} else {
	echo("Enter an operation id");
}

?>


Enter an operation id:

<form action="get.php">
	<input type="text" name="api_key" placeholder="Api Key">
	<input type="text" name="operation_id" placeholder="Operation id">
	<input type="submit">
</form>



<pre>
<? print_r($poke) ?>
</pre>
