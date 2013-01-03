<?php
class Board_Controller extends Base_Controller
{

    public function action_show($board_id)
	{
		$board = Board::find($board_id);
		$topics = $board->topics;

		$sidebar = View::make('sidebar.topics')
			->with('board', $board);
		Section::inject('sidebar', $sidebar);
			

		return View::make('board.show')
			->with('board', $board)
			->with('sidebar', true);
	}

    public function action_new($default_board = null)
    {
		return View::make('board.new');
	}

	public function action_create()
	{
		$board = new Board();

		$board->title = Input::get('title');
		$board->description = Input::get('description');

		$board->save();

		return Redirect::to('/');
	}


}