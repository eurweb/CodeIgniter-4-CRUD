
<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

  <div class="container mt-5">
    <form method="post" action="/posts/edit/<?=$id?>">

  

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?=$post['name']?>">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?=$post['email']?>">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-info">Save</button>
      </div>
    </form>
  </div>

 <?= $this->endSection() ?>


<?= $this->section('footer') ?>

<?= date('Y-m-d H:i:s') ?> add

<?= $this->endSection() ?>