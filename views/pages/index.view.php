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

        <div class="pages">
          <a class="active">1</a><a>2</a><a>3</a><a>4</a><a>5</a>
        </div>
      </section>
    <?php endif; ?>
