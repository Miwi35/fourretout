<?php
class Topic_Controller extends Base_Controller
{

    public function action_show($topic_id)
    {
        //
        $topic = Topic::with('Board')->find($topic_id);
        
		$sidebar = View::make('sidebar.topics')
					->with('board', $topic->board);

		Section::inject('sidebar', $sidebar);

		return View::make('topic.show')
					->with('topic', $topic)
					->with('sidebar', true);
    }

    public function action_new($default_board = null)
    {
    	$view = View::make('topic.new');

    	if(!is_null($default_board))
    		$view = $view->with('default_board', $default_board);

		return $view;
	}

	public function action_create()
	{
		$topic = new Topic();

		$topic->title = Input::get('title');
		$topic->board_id = Input::get('board_id');
		$topic->description = Input::get('description');

		$topic->save();

		return Redirect::to('/board/'.$topic->board);
	}


}