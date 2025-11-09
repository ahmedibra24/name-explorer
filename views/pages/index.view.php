    <?php if( empty($char) || strlen($char)===0) :?>
        <section class="card slide-up">
          <h2 style="text-align: center;">Please select a letter to explore names.</h2>
          <h3>Most common names:</h3>
          <ol class="name-list">
            <?php foreach($commonNames as $name): ?>
              <li>
                <a href="result.php?<?php echo http_build_query(['name'=>$name]); ?>">
                  <?php echo e($name['name']); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ol>
        </section>
    <?php  else: ?>
      <section class="card slide-up">
        <h2>Names starting with <?php echo e($char); ?></h2>
        <ol class="name-list">
          <?php foreach($names as $name): ?>
            <li>
              <a href="result.php?<?php echo http_build_query(['name'=>$name]); ?>">
                <?php echo e($name); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ol>

        
        <ul class="pages">
          <?php if($pagination['page']>1): ?>
            <li>
              <a href="index.php?<?php echo http_build_query(['char'=> $char , 'page'=> $pagination['page']-1]); ?>">⏴</a>
            </li>
          <?php endif; ?>
          <?php for($x=1;$x<=$pagination['numPages'];$x++): ?>
            <li>
              <a href="index.php?<?php echo http_build_query(['char'=> $char , 'page'=> $x]); ?>"
                 class=" <?php if($pagination['page'] ===$x ) echo 'active'; ?> ">
                <?php echo e($x); ?>
              </a>
            </li>
          <?php endfor; ?>
          <?php if($pagination['page']<$pagination['numPages']): ?>
            <li>
              <a href="index.php?<?php echo http_build_query(['char'=> $char , 'page'=> $pagination['page']+1]); ?>">⏵</a>
            </li>
          <?php endif; ?>
        </ul>
        
      </section>
    <?php endif; ?>
