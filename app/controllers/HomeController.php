<?php
/**
* \HomeController
*/
class HomeController extends BaseController
{

  public function home()
  {
    $this->view = View::make('Home')->with('article',Article::first())
                                    ->withtitle('holyboom')
                                    ->withfuck_me('OK!');
  }
}