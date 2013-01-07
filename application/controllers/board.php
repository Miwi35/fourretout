<?php
class Board_Controller extends Base_Controller
{

	public function action_index()
	{
		$boards = Board::with('topics')->all();
		
		$this->layout->title = "Boards";
		$this->layout->content = View::make('board.index')
			->with('boards', $boards);
	}

    public function action_show($board_id)
	{
		$board = Board::find($board_id);
		$topics = $board->topics;

		$this->layout->title = $board->fulltitle;

		$this->layout->sidebar = View::make('sidebar.sidebar')
					->with('modules', array(
						View::make('sidebar.addtopic')
							->with('board_id', $board_id)->render()
						)
					);
			
		$this->layout->content = View::make('board.show')
			->with('board', $board);
	}

    public function action_new()
    {
		$this->layout->content = View::make('board.form')
			->with('action', URL::to_route('board_create'))
			->with('legend', 'Nouveau board')
			->with('button', 'Ajouter');
	}

	public function action_edit($board_id)
    {
    	$board = Board::find($board_id);

		$this->layout->content = View::make('board.form')
			->with('board', $board)
			->with('action', URL::to_route('board_update', $board_id))
			->with('legend', 'MAJ board')
			->with('button', 'Modifier');;
	}

	public function action_create()
	{
		$board = new Board();

		$board->title = Input::get('title');
		$board->description = Input::get('description');

		$board->save();

		return Redirect::to('/');
	}

	public function action_update($board_id)
	{
		$board = Board::find($board_id);

		$board->title = Input::get('title');
		$board->description = Input::get('description');

		$board->save();

		return Redirect::to('/');
	}


}