<?php 

/**
 * 
 */
session_start();
class Base
{
    
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
}