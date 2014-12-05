<?php
class Controller_Wdev extends Controller_Template
{

	public function action_index()
	{
		$data['wdevs'] = Model_Wdev::find('all');
		$this->template->title = "Wdevs";
		$this->template->content = View::forge('wdev/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('wdev');

		if ( ! $data['wdev'] = Model_Wdev::find($id))
		{
			Session::set_flash('error', 'Could not find wdev #'.$id);
			Response::redirect('wdev');
		}

		$this->template->title = "Wdev";
		$this->template->content = View::forge('wdev/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Wdev::validate('create');

			if ($val->run())
			{
				$wdev = Model_Wdev::forge(array(
					'title' => Input::post('title'),
					'content' => Input::post('content'),
				));

				if ($wdev and $wdev->save())
				{
					Session::set_flash('success', 'Added wdev #'.$wdev->id.'.');

					Response::redirect('wdev');
				}

				else
				{
					Session::set_flash('error', 'Could not save wdev.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Wdevs";
		$this->template->content = View::forge('wdev/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('wdev');

		if ( ! $wdev = Model_Wdev::find($id))
		{
			Session::set_flash('error', 'Could not find wdev #'.$id);
			Response::redirect('wdev');
		}

		$val = Model_Wdev::validate('edit');

		if ($val->run())
		{
			$wdev->title = Input::post('title');
			$wdev->content = Input::post('content');

			if ($wdev->save())
			{
				Session::set_flash('success', 'Updated wdev #' . $id);

				Response::redirect('wdev');
			}

			else
			{
				Session::set_flash('error', 'Could not update wdev #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$wdev->title = $val->validated('title');
				$wdev->content = $val->validated('content');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('wdev', $wdev, false);
		}

		$this->template->title = "Wdevs";
		$this->template->content = View::forge('wdev/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('wdev');

		if ($wdev = Model_Wdev::find($id))
		{
			$wdev->delete();

			Session::set_flash('success', 'Deleted wdev #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete wdev #'.$id);
		}

		Response::redirect('wdev');

	}

}
