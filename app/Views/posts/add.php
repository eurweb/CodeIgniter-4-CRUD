<div>


<?php if (! empty($errors)) : ?>
    <div class="alert alert-danger">
    <?php foreach ($errors as $field => $error) : ?>
        <p><?= $field ?> :::: <?= $error ?></p>
    <?php endforeach ?>
    </div>
<?php endif ?>



    <form method="post">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-info btn-block">Add</button>
      </div>
    </form>
</div>