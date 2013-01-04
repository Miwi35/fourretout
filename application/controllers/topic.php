<?php
class Topic_Controller extends Base_Controller
{

    public function action_show($topic_id)
    {
        //
        $topic = Topic::with(array('board','posts'	=> function($query)
					{
					    $query->where_null('post_id');
					}, 'posts.comments'))
        	->find($topic_id);
        
		$this->layout->sidebar = View::make('sidebar.sidebar')
					->with('modules', array(
						View::make('sidebar.addpost')
							->with('topic_id', $topic_id)->render()
							)
					);

		$this->layout->content = View::make('topic.show')
					->with('topic', $topic);
    }

    public function action_new($board_id)
    {

		$this->layout->content = View::make('topic.form')
			->with('board_id', $board_id)
			->with('action', URL::to_route('topic_create'))
			->with('legend', 'Nouveau topic')
			->with('button', 'Ajouter');
	}

	public function action_edit($post_id)
    {
    	$topic = Post::find($topic_id);

		$this->layout->content = View::make('topic.form')
			->with('topic', $topic)
			->with('action', URL::to_route('topic_update', $topic_id))
			->with('legend', 'MAJ topic')
			->with('button', 'Modifier');
	}

	public function action_create()
	{
		$topic = new Topic();

		$topic->title = Input::get('title');
		$topic->board_id = Input::get('board_id');
		$topic->description = Input::get('description');

		$topic->save();

		return Redirect::to_route('board_show', $topic->board_id);
	}

	public function action_update($topic_id)
	{
		$topic = Board::find($topic_id);


		$topic->board_id = Input::get('board_id');
		$topic->title = Input::get('title');
		$topic->description = Input::get('description');

		$topic->save();

		return Redirect::to_route('topic_show', $topic->id);
	}


}