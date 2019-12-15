<?php


namespace DevCat\ResponseClass;


class JsonResponse
{
	public $status;
	public $message;
	public $data = array();
	public $statusCode;
	public $result;
	
	public function __construct($status, $message = '', array $data = array())
	{
		$this->status = $status;
		$this->message = $message;
		$this->data = $data;
		
		$this->result = array(
			'status' => $this->status
		);
		
		echo $this->response();
	}
	
	/**
	 * Fomat user messsage with HTTP status and staus code
	 *
	 * @return false|string - json object
	 */
	private function response()
	{
		// setting the http response code
		$this->statusCode = 200;
		switch ($this->status) {
			case 'unauthorized':
				$this->statusCode = 401;
				break;
			
			case 'exception':
				$this->statusCode = 500;
		}
		
		// set the response header
		header("Content-Type: application/json");
		header(sprintf('HTTP/1.1 %s %s', $this->statusCode, $this->status), true, $this->statusCode);
		
		if ($this->message != '') $this->result['message'] = $this->message;
		
		if (count($this->data) > 0) $this->result['data'] = $this->data;
		
		return json_encode($this->result);
	}
}