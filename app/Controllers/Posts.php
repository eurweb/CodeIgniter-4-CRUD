<?php namespace App\Controllers;


use App\Models\Post;

class Posts extends BaseController
{
	
   public function index()
   {
      $postModel = new Post();
      $data['posts'] = $postModel->findAll();
      return view('posts/index', $data);
   }


    public function edit($id)
	{
         $postModel = new Post();
         $data['id'] = $id;
         if (isset($_POST['name']))
         {
         		$postModel->update($id, $_POST);
         		return redirect()->to( base_url('posts') );
         }
         else
         {
         	$data['post'] =  $postModel->find($id);
         }
		return view('posts/edit', $data);
	}

    public function delete($id)
	{
         $postModel = new Post();
         $postModel->delete($id);
         return redirect()->to( base_url('posts') );
	}

    public function add()
	{
         $postModel = new Post();
         if (isset($_POST['name']))
         {
         		$postModel->insert($_POST);
         		return redirect()->to( base_url('posts') );
         }
		return view('posts/add');
	}



	

}
