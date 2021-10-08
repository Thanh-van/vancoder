<?php 

/**
 * 
 */
session_start();
class Base
{
    function __construct()
	{
		if(isset($_SESSION['user']) && $_SESSION['user']['level'] == 0) {
            header('Location: '. host .'/'. name_project . '?url=admin');
            die;
        }
	}
    public function view()
    {
        if (isset($_GET['view'])) {
            $function = $_GET['view'];
            $this->$function();
        } else {
            $this->home();
        }
    }
    public function blogs()
    {
        $post_md = View::get__model('post');
        $post = $post_md->get_post(
            array(
                'status' => '1'
            ),null," ORDER BY `post`.`date`  DESC LIMIT 6"
        );
        $data = array(
            'post' => $post,
            'count' => count($post_md->get_post(array('status' => '1')))
        );
        include_once view_font.'blog.php';
    }
    public function ticker()
    {
        include_once view_font.'ticker.php';
    }
    public function contact(){
        include_once view_font.'contact.php';
    }
    public function content_ticker()
    {
        $ticket_md = View::get__model('ticket');
        
        
        $post = $ticket_md->get_ticket(
            array(
                'status' => '1',
                
            ),null," ORDER BY delivery_date  ASC LIMIT ".($_POST['page']-1)*6 . ' , ' . $_POST['page']*6
        );
        
        $category = View::get__model('category');
        $count = count($ticket_md->get_ticket(array('status' => '1')));
        if(isset($_POST['key'])){
            $post = $ticket_md->select_like_ticket("WHERE `name` LIKE '%".$_POST['key']."%' AND `status` = 1 ORDER BY `description` ASC LIMIT " .($_POST['page']-1)*6 . ' , ' . $_POST['page']*6);
            $count = count($ticket_md->select_like_ticket("WHERE `name` LIKE '%".$_POST['key']."%' AND `status` = 1"));
        }
        
        $data = array(
            'ticket' => $post,
            'count' => $count,
            'page' => $_POST['page'],
            'category' => $category->get__all(array('cat_parent' => '3'))
        );
        
        include_once view_font.'ticket-content.php';
    }
    public function blogs_detail()
    {
        $category = View::get__model('category');
        $post_md = View::get__model('post');
        $post = $post_md->get_post(
            array(
                'id' => $_GET['post'],
                'status' => '1'
            ),null," ORDER BY `post`.`date`  DESC LIMIT 6"
        );
        $data = array(
            'post' => $post,
            'category' => $category->get__all(array('cat_parent' => '3')),
            'recent' => $post_md->get_post(null,null," ORDER BY `post`.`date`  DESC LIMIT 3")
        );
        include_once view_font.'blog-single.php';
    }
    public function ajax_post()
    {
        $post_md = View::get__model('post');
        $post = $post_md->get_post(
            array(
                'status' => '1',
                
            ),null," ORDER BY `post`.`date`  DESC LIMIT ".($_POST['page']-1)*6 . ' , ' . $_POST['page']*6
        );
        $data = array(
            'post' => $post,
            'count' => count($post_md->get_post(array('status' => '1'))),
            'page' => $_POST['page']
        );
        include_once view_font.'blog_content.php';
    }
    public function about()
    {
        include_once view_font.'about.php';
    }
    public function home()
    {
        $ticket = View::get__model('ticket');
        $ticket = $ticket->get_ticket(
            array(
                'status' => '1'
            ),null," ORDER BY sort DESC LIMIT 6"
        );
        $post = View::get__model('post');
        $post = $post->get_post(
            array(
                'status' => '1'
            ),null," ORDER BY `post`.`date` DESC LIMIT 5"
        );
        $category = View::get__model('category');

        $data = array(
            'post' => $post,
            'ticket' => $ticket,
            'category' => $category->get__all(array('cat_parent' => '3'))
        );
        include_once view_font.'index.php';
    }
    public function login(){
        $model = View::get__model('user');
        if(isset($_POST['password'])){
            $user = $model->get_user(
                array(
                'user' => $_POST['email'],
                'pass' => $_POST['password']
            ));
            
            if($user != 0 )
            {
                $user = $user[0];
                $_SESSION['user'] = $user;
                header('Location: '. host .'/'. name_project . '?url=admin');
            }else{
                echo "false";
            }
            
        }
        
        include_once view_font.'login/index.php';
    }
    public function add_acc()
    {
        $model = View::get__model('user');
        if( isset($_POST['login']) ){
            $model->add_user_custom($_POST);
            header('Location: '. host .'/'. name_project . '?view=login');
        } 
       
        include_once view_font.'login/new.php';
    }
    public function log_out(){
        session_destroy();
        header('Location: '. host .'/'. name_project . '?view=login');
    }
    public function ticker_detail()
    {
        if(isset($_GET['id']))
        {
            $ticket_md = View::get__model('ticket');
            $post = $ticket_md->get_ticket(
                array(
                    'id' => $_GET['id'],
                )
            );
            $data = array(
                'ticker' => $post
            );
            
            include_once view_font.'ticker_detail.php';
        }else{
            header('Location: '. host .'/'. name_project . '?view=ticker');
        }
        
    }
    public function cart_site()
    {
        if(isset($_POST['id_ticket'])){
            $ticket_md = View::get__model('ticket');
            $bill = View::get__model('bill');
            $get_bill = $bill -> get_bill(
                array(
                    'id_user' => $_SESSION['user']['id'],
                    'id_ticket' => $_POST['id_ticket']
                )
            );
            $array = array(
                'id_user' => $_SESSION['user']['id'],
                'id_ticket' => $_POST['id_ticket'],
                'quantity' => $_POST['quantity'],
                'status' => 0
            );
            print_r($get_bill);
            if($get_bill == 0)
                $check = $bill->add_bill($array);
            else $check = $bill->update_bill(array('id' => $get_bill[0]['id'], 'quantity' => $get_bill[0]['quantity']+$_POST['quantity']));
            if($check == true)
            {
                $array = array(
                    'id' => $_POST['id_ticket'],
                    'quantity' => $_POST['cu'] - $_POST['quantity']
                ); 
                $check = $ticket_md->upp_ticket_mem($array);
                if($check == true)
                    echo "Mua Hàng Thành Công";
                else echo "Lỗi cập nhật số lượng";
            }else echo "Mua Hàng Không Thành Công";
            
        }
        else{
            echo "Lỗi";
        }
    }
    public function profile(){

        $bill = View::get__model('bill');
        $ticket = View::get__model('ticket');
        $bill = $bill -> get_bill(
            array(
                'id_user' => $_SESSION['user']['id']
            )
        );
        $product = array();
        $arr = array();
        foreach ($bill as $item => $key) {
            $arr = $ticket->get_ticket(
                array(
                    'id' => $key['id_ticket']
                )
            );
            array_push($product,$arr);
        }
        $data = array(
            'bill' => $bill,
            'ticket' => $product
        );
        if(isset($_POST['login'])){
            $model = View::get__model('user');
            if( isset($_POST['login']) ){
                $model->update_user_custom($_POST);
                $user = $model ->get_user(array('id'=>$_SESSION['user']['id']));
                $user = $user[0];
                session_reset();
                $_SESSION['user'] = $user;
                header('Location: '. host .'/'. name_project . '?view=profile');
            }
        }
        include_once view_font.'profile.php';
    }

}