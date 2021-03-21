<div class="container mt-5">
    <form method="post" action="/users/edit/<?=$id?>" enctype="multipart/form-data">

      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?=$post['name']?>">
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?=$post['email']?>">
      </div>

<div class="form-group">
<img src="/img/users/<?=$post['image']?>">
<label>Image</label>
<input id="fileUpload" class="upload" name="image" type="file" accept="image/*" />
</div>

      <div class="form-group">
        <button type="submit" class="btn btn-info">Save</button>
      </div>
    </form>
</div>