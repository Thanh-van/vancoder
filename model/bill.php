<?php
include_once 'model.php';
class Bill extends Basemodel{
    private $admin ;
	function __construct()
	{
		$this->admin = new Basemodel();
	}
    
    
    public function get_bill($array = null , $k = null)
    {
        $data = $this->admin->Select("bill ",$array , $k);
        return $data;
    }
    public function d_bill($id)
    {
        $query = "DELETE FROM `bill` WHERE id =" . $id;
        $data = $this->admin->Delete($query);
        return $data;
    }
    public function update_bill_tt($status,$POST)
    {
        $data =  $this->admin->Update('bill',array(
            'status' => $status,
        ),$POST);
        return $data;
    }
    public function update_bill($POST)
    {
        $data =  $this->admin->Update('bill',array(
            'quantity' => $POST['quantity'],
            'status' => 1
        ),$POST['id']);
        return $data;
    }

    public function add_bill($POST)
    {
        $array = array(
            'id_user' => $POST['id_user'],
            'id_ticket' => $POST['id_ticket'],
            'quantity' => $POST['quantity'],
            'status' => $POST['status']
        );
        $data =  $this->admin->INSERT('bill',$array);
        return $data;
    }


}