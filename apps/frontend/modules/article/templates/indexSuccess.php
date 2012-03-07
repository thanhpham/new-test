<?php use_helper('Pagination'); ?>



<table class="table table-striped">
  <thead>
  
  </thead>
  <tbody>


  
    <?php foreach ($pager->getResults() as $x_article): ?>
    <tr>
      <td></td>

      <td> <div><?php echo link_to(  $x_article->getTitle() , $x_article->getUrl(), array('data-content' => $x_article->getSumarry(),
                                                                                    'id' => 'article'.$x_article->getId(), 
                                                                                    'rel'=> 'popover',
                                                                                    'target' => '_blank')) ?>
              </div>

          
          <script>
             $(function ()
             { $("#article<?php echo $x_article->getId()?>").popover({placement:'right'});
             });
          </script>

          
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php  echo pager_navigation($pager, '/article') ?>

