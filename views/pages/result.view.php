    <section class="card slide-up">
      <h1>Statistics for the name: <?php echo e($name); ?></h1>
      <?php if(empty($results)): ?>
        <p>We could not find any entries in our system :/ </p>
      <?php endif; ?>
      <table class="dark-table">
        <tr>
          <th>Year</th>
          <th>Number of Babies born</th>
        </tr>
        <?php foreach($results as $result): ?>
        <tr>
          <td><?php echo e($result['year']);?></td>
          <td><?php echo e($result['count']);?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </section>

