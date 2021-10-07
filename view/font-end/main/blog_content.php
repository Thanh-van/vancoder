<div class="row d-flex" >
      <?php foreach($data['post'] as $item => $key ){ ?>
      <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
       <div class="blog-entry justify-content-end">
        <a href="?view=blogs_detail&post=<?= $key['id']  ?>" class="block-20" style="background-image: url('<?= host . '/' . name_project . 'view/'; ?>upload/<?= $key['img'] ?>');">
        </a>
        <div class="text">
         <div class="d-flex align-items-center mb-4 topp">
          <div class="one">
           <span class="day"><?= date("d", strtotime($key['date']))   ?></span>
         </div>
         <div class="two">
           <span class="yr"><?= date("Y", strtotime($key['date']))   ?></span>
           <span class="mos"><?= date("M", strtotime($key['date']))   ?></span>
         </div>
       </div>
       <h3 class="heading"><a href="?view=blogs_detail&post=<?= $key['id']  ?>"><?= $key['title'] ?></a></h3>
       <p><?= $key['description'] ?>.</p>
       <p><a href="?view=blogs_detail&post=<?= $key['id']  ?>" class="btn btn-primary">Read more</a></p>
     </div>
   </div>
 </div><?php } ?>
</div>
<div class="row mt-5 d-flex">
  <div class="col text-center">
    <div class="block-27">
    <ul>
        <span id="count" hidden><?= ceil($data['count']/6) ?></span>
      <li class="page"><span page="&lt;">&lt;</span></li>
      <?php for($i = 1 ; $i <= ceil($data['count']/6); $i++){
        ?>
         <li class="page <?php if($i == $data['page']) echo"active" ?>"><span page="<?= $i ?>"><?= $i ?></span></li>
        <?php
      } ?>
         <li class="page"><span page="&gt;">&gt;</span></li>
      </ul>
    </div>
  </div>
</div>

<script>
  $( document ).ready(function() {
    
    $('.page').on( "click", function(){
      $page = $(this).find('span').attr('page');
      if($page === '>')
        {
            $page = $('.page.active').find('span').attr('page');
            if($("#count").text() === $page) $page = 1;
            else $page = parseInt($page) +1;
        }
        if($page === '<')
        {
            $page = $('.page.active').find('span').attr('page');
            if($page == 1) $page = $("#count").text();
            else $page = parseInt($page) - 1;
        }
      $.ajax({
              url : "?view=ajax_post",
              type : "POST",
              data : {
                        'page' : $page,
                    },
              success : function (result){
                  $('#result').html(result);
              }
      });
    });
  });

</script>