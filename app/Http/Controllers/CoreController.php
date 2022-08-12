<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{

	private $message;
	private $data = [];
	private $status = true;
	private $permissions;
	private $route;


	public function addData( $key , $value )
	{
		$this->data[ $key ] = $value;
	}
	public function addErrorMessage( $reason , $message )
	{
		$this->status = false;
		$this->setMessage('Error',$reason,$message);
	}
	public function addWarningMessage( $reason , $message )
	{
		$this->status = false;
		$this->setMessage('Warning',$reason,$message);
	}
	public function addSuccessMessage( $reason , $message){
		$this->setMessage('Success',$reason,$message);
	}
	public function addInfoMessage($reason,$message){
		$this->setMessage('Info',$reason,$message);
	}
	public function setMessage($type,$reason,$message){
		$this->message[$type] = [
			'title' => $reason,
			'type' => str_slug( $type ),
			'description' => $message
		];
	}
    public function result()
    {
		return response()->json([
			'message' 		=> $this->message,
			'data'    		=> $this->data,
			'permissions' 	=> $this->permissions,
			'status'    	=> $this->status,
			'route'   		=> $this->route
		]);
    }
}
