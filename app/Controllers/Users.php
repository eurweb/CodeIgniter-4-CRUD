<?php namespace App\Controllers;


use App\Models\Post;

class Users extends BaseController
{
	
   public function index()
   {
      $postModel = new Post();
      $this->data['posts'] = $postModel->findAll();
      return $this->render('posts/index');
   }


  public function edit($id)
	{
         //$postModel = new Post();
    $builder = $this->db->table('posts');

         $this->data['id'] = $id;
         if (isset($_POST['name']))
         {

            $image = $this->request->getFile('image');

            if ($image && $image->isValid() && ! $image->hasMoved())
            {
              $ext = $image->guessExtension();
              $newName = $id.'.'.$ext;
              $p = $image->move(FCPATH.'img/users', $newName);
              $_POST['image'] = $newName;
            }
            //  builder->update($data, ['id' => $id]);
            $builder->update($_POST, ['id' => $id]);
         		//$postModel->update($id, $_POST);
         		//return redirect()->to( base_url('users') );
         }
       // 'array'   
      $this->data['post'] = (array) $builder->where('id', $id)->limit(1)->get()->getRow();
      //$this->data['post'] =  $postModel->find($id);
         
	
        return $this->render('posts/edit');
	}

  public function delete($id)
	{
         $postModel = new Post();
         $postModel->delete($id);
         return redirect()->to( base_url('users') );
	}

  public function add()
	{
    
    $postModel = new Post();
    $this->data['errors'] = null;

    if ($_POST)
    {
        if ($postModel->insert($_POST))
          return redirect()->to( base_url('users') );
        
        $this->data['errors'] = $postModel->errors();
        
    }
    
		return $this->render('posts/add');
	}
}