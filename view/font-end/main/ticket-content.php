<section class="ftco-section">
  <?php if($data['ticket'] != 0){ ?>
   <div class="container">
    <div class="row">
    <?php foreach($data['ticket'] as $item => $key ){ ?>
       <div class="col-md-4 ftco-animate fadeInUp ftco-animated">
          <div class="project-wrap">
             <a href="?view=ticker_detail&id=<?= $key['id']; ?>" class="img" style="background-image: url('<?= host . '/' . name_project . 'view/'; ?>upload/<?= $key['img'] ?>');">
                <span class="price">$550/person</span>
            </a>
            <div class="text p-4">
                <span class="days"><?= floor( abs(strtotime($key['end_date'])  - strtotime($key['delivery_date'])) / (60*60*24) )  ?> Days Tour</span>
                <h3><a href="#"><?= $key['name'] ?></a></h3>
                <p class="location"><span class="fa fa-map-marker"></span>  <?php
                                foreach ($data['category'] as $item => $ticket_key) {
										if($ticket_key['id'] === $key['id_category'])
                                   	 	echo $ticket_key['name'];
                                    }
                                ?>
                <ul>
                  <li><span class="flaticon-king-size"></span><?= $key['quantity'] ?></li>
									<li><span class="flaticon-mountains"></span><?= $key['description'] ?></li>
								</ul>
           </div>
       </div>
    
   </div><?php } ?>
   </div>
<div class="row mt-5">
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
<?php }else{
  echo "no dâta";
} ?>
</div>

</section>

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
              url : "?view=content_ticker",
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