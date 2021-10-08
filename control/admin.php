<?php 

/**
 * 
 */
session_start();
class Admin
{
    function __construct()
	{
		if(isset($_SESSION['user']) ){
            if($_SESSION['user']['level'] != 0)
                header('Location: '. host .'/'. name_project);
        }else{
            header('Location: '. host .'/'. name_project);
        }
	}
    
    public function log_out(){
        unset($_SESSION['user']);
        header('Location: '. host .'/'. name_project);
        die;
    }
	public function view()
	{
        if(isset($_GET['view'])){
            $function = $_GET['view'];
            $this->$function();
        }else{
            $this -> user();
        }
	}
    
    private function user()
    {
        $model = View::get__model('user');
        (isset($_GET['id'])) ? $model->d_user($_GET['id']) : false;
        $user = $model->get_user();
        
        $check =  ( isset($_POST['publish']) ) ? ((isset($_POST['id']) && $_POST['id'] === 'add' ) ? $model->add_user($_POST): $model->update_user($_POST)) : null;
        $user = $model->get_user(array( 'level' => 0));
        $data = array(
            'user' => $user
        );
        View::get_layout("user",$data);
    }

    private function catalog()
    {
        $model = View::get__model('category');
        ( isset($_POST['publish']) ) ? 
        ((isset($_POST['id']) && $_POST['id'] === 'add' ) ? 
        $model->add_category($_POST): $model->update_category($_POST)) : null;
        (isset($_GET['id'])) ? $model->delete_catalog($_GET['id']) : false;
        $data = $model -> get__all(null);
        View::get_layout("category",$data);
    }
    private function ticket()
    {
        $category = View::get__model('category');
        $model = View::get__model('ticket');
        $all = $model -> get_ticket();
        if(isset($_POST['publish']))
        {
            ($_POST['id'] === 'add') ? $model ->add_ticket($_POST) : $model ->update_ticket($_POST);
            header("Refresh:0");
        }
        if(isset($_GET['id'])) { $model ->d_ticket($_GET['id']); header("Refresh:0; ?url=admin&view=ticket"); };
        $data = array(
            'ticket' => $all,
            'category' => $category->get__all(array('cat_parent' => '3'))
        );
        View::get_layout("ticket",$data);
    }
    private function customer()
    {
        $model = View::get__model('customer');
        if(isset($_GET['id'])) { $model ->d_user($_GET['id']); header("Refresh:0; ?url=admin&view=customer"); };
        $user = $model->get_user();
        
        $check =  ( isset($_POST['publish']) ) ? ((isset($_POST['id']) && $_POST['id'] === 'add' ) ? $model->add_user($_POST): $model->update_user($_POST)) : null;
        $user = $model->get_user(array( 'level' => '1'));
        $data = array(
            'user' => $user,
            'lv'   => '1'
        );
        View::get_layout("customer",$data);
    }
    private function test()
    {   
        View::get_layout("movefile",null);
    }
    private function post()
    {
        $category = View::get__model('category');
        $model = View::get__model('post');
        if (isset($_GET['id'])) {
            $post = $model->d_post($_GET['id']);
            header("?url=admin&view=post");
        }
        $data = array(
            'post' => $model->get_post(),
            'category' =>  $category->get__all()
        );
        View::get_layout("post",$data);
    }

    public function post_detail()
    {
        $category = View::get__model('category');
        $model = View::get__model('post');
        (isset($_GET['id'])) ?  $post = $model->get_post(array( 'id' => $_GET['id'])) :  $post = null;
        if(isset($_POST['publish']))
        {
            (isset($_POST['id'])) ? $model ->update_post($_POST) : $model ->add_post($_POST) ;
            header("Refresh:0");
        }
        $data = array(
            'post' => $post,
            'category' =>  $category->get__all()
        );
        View::get_layout("post_detail",$data);
    }
    public function bill()
    {
        $bill = View::get__model('bill');
        $ticket = View::get__model('ticket');
        $bill_data = $bill -> get_bill();
        $product = array();
        $arr = array();
        foreach ($bill_data as $item => $key) {
            $arr = $ticket->get_ticket(
                array(
                    'id' => $key['id_ticket']
                )
            );
            array_push($product,$arr);
        }
        $user = View::get__model('user');
        $user_data = array();
        foreach ($bill_data as $item => $key) {
            $arr = $user->get_user(
                array(
                    'id' => $key['id_user']
                )
            );
            array_push($user_data,$arr);
        }
        $data = array(
            'bill' => $bill_data,
            'ticket' => $product,
            'user' => $user_data
        );
        if(isset($_GET['key']))
        {
            if($_GET['key'] == "duyet")
                $bill ->update_bill_tt(1,$_GET['id']);
            if($_GET['key'] == "huy")
            $bill ->update_bill_tt(2,$_GET['id']);
            
            header('Location: ?url=admin&view=bill');
        }
        View::get_layout("bill",$data);
    }
}

 ?>