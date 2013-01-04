<?php
class Post_Controller extends Base_Controller
{

    public function action_show($post_id)
    {
        //
        $post = Post::with(array('topic', 'topic.board', 'comments'))
        	->find($post_id);


        
		$this->layout->content = View::make('post.show')
					->with('post', $post)
					->with('commentForm', View::make('post.form')
						->with('topic_id', $post->topic->id)
						->with('parent_id', $post->id)
						->with('action', URL::to_route('post_create'))
						->with('legend', 'Ajouter un commentaire')
						->with('button', 'Ajouter')
						->render()
						);
    }

    public function action_new($topic_id, $parent_id = null)
    {
		$this->layout->content = View::make('post.form')
    		->with('topic_id', $topic_id)
    		->with('parent_id', $parent_id)
    		->with('action', URL::to_route('post_create'))
			->with('legend', 'Nouveau post')
			->with('button', 'Ajouter');
	}

	public function action_edit($post_id)
    {
    	$post = Post::find($post_id);

		$this->layout->content = View::make('post.form')
			->with('post', $post)
			->with('topic_id', $topic_id)
    		->with('parent_id', $parent_id)
			->with('action', URL::to_route('post_update', $post_id))
			->with('legend', 'MAJ post')
			->with('button', 'Modifier');
	}

	public function action_create()
	{
		$post = new Post();

		$post->topic_id = Input::get('topic_id');
		if(Input::get('post_id') != '')
			$post->post_id = Input::get('post_id');
		$post->title = Input::get('title');
		$post->link = Input::get('link');
		$post->content = Input::get('content');

		$post->save();

		if($post->post_id != ""){
			return Redirect::to_route('post_show', $post->post_id);
		}else{
			return Redirect::to_route('topic_show', $post->topic_id);
		}
	}

	public function action_update($post_id)
	{
		$post = Board::find($post_id);

		$post->topic_id = Input::get('topic_id');
		$post->title = Input::get('title');
		$post->link = Input::get('link');
		$post->content = Input::get('content');

		$post->save();

		return Redirect::to_route('post_show', $post->id);
	}


}