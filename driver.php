<?php

require('rs274ngc.php');

class CNC_Driver {

	public function __construct()
	{ }

	function interpret()
	{
		$code_ori = $_POST["nccode"];
		$code = nl2br( $code_ori );
		$code_arr = explode( "<br />", $code );
		rs274ngc = new Rs274ngcModel();
		$ret = rs274ngc->interpret($code_arr);

		return $ret;

	}
}

?>
