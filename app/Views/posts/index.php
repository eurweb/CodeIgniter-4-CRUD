<div class="actionbutton mt-2">
   <a class="btn btn-info float-right mb20" href="<?=site_url('users/add')?>">Add Post</a>
</div>

<!-- Subject List -->
<table width="100%" border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
      <th width="10%">ID</th>
      <th width="30%">Name</th>
      <th width="45%">Title</th>
      <th width="15%">&nbsp;</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($posts as $post) : ?>

     <tr>
       <td><?= $post['id'] ?></td>
       <td><?= $post['name'] ?></td>
       <td><?= $post['email'] ?></td>
       <td align="center">
         <a class="btn btn-sm btn-info" href="<?= site_url('users/edit/'.$post['id']) ?>">Edit</a>
         <a class="btn btn-sm btn-danger" href="<?= site_url('users/delete/'.$post['id']) ?>">Delete</a>
       </td>
     </tr>

<?php endforeach; ?>
  
  </tbody>
</table>