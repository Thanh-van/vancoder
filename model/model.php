<?php 

/**
 * 
 */
class Basemodel
{
	private $str_connect;
	function __construct()
	{
		$this->connect();
	}
	public function connect()
	{
		$this->str_connect=new mysqli('localhost','root','','travel');
		mysqli_set_charset($this->str_connect,'utf8');
	}
	public function Select($query)
	{
		$result=$this->str_connect->query($query);
		if ($result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$result->fetch_assoc()) {
				$data[]=$row;
			}
		}
		return $data;
	}
	
	public function INSERT_track_oder($date,$user,$address,$item,$price,$quatity,$tracking_number,$status)
	{
		$str="INSERT INTO `track_oder`(`date`, `user`, `address`, `item`, `price`, `quatity`, `tracking_number`, `status`) VALUES ('".$date."','".$user."','".$address."','".$item."','".$price."','".$quatity."','".$tracking_number."','".$status."')";
		$this->str_connect->query($str);
	}
	public function delete_track_oder($id_track)
	{
		$str="DELETE FROM `track_oder` WHERE id_track= $id_track";
		$this->str_connect->query($str);
	}
	public function edit_track_oder($id_track,$date,$user,$address,$item,$price,$quatity,$tracking_number,$status)
	{
		$str="UPDATE `track_oder` SET `date`='".$date."',`user`='".$user."',`address`='".$address."',`item`='".$item."',`price`='".$price."',`quatity`='".$quatity."',`tracking_number`='".$tracking_number."',`status`='".$status."' WHERE id_track = $id_track";
		$this->str_connect->query($str);
	}
	
}


 ?>