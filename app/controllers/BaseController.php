<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function getUserScore($id)
	{
		$answerScore = DB::table('votes')
			->join('answers', 'votes.answer_id', '=', 'answers.id')
			->select(DB::raw('SUM(count) as vote_count'))
			->where('answers.user_id', '=', $id)
			->get();
		
		return $score = $answerScore[0]->vote_count;
	}

}
