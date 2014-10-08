<?php

class BaseController extends Controller
{
    /**
     * @var string
     */
    protected $layout = 'layouts.default';

    /**
     * @var
     */
    protected $auth;

    /**
     * @var
     */
    protected $input;

    /**
     * @var Redirect
     */
    protected $redirect;

    /**
     * @param Input $input
     * @param Redirect $redirect
     */
    public function __construct(
        Input $input,
        Redirect $redirect
    )
    {
        $this->input = $input;
        $this->redirect = $redirect;
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * @param $input
     * @return mixed
     */
    protected function input($input)
    {
        return Input::get($input);

//        return $this->input->get($input);
    }

    /**
     * @param $route
     * @param array $params
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectRoute($route, $params = [], $data = [])
    {
        return $this->redirect->route($route, $params)->with($data);
    }

    /**
     * @param $url
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectURLTo($url)
    {
        return $this->redirect->to($url);
    }

    /**
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectBack($data = [])
    {
        return $this->redirect->back()->withInput()->with($data);
    }

    /**
     * @param null $default
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectIntended($default = null)
    {
        return $this->redirect->intended($default);
    }
}
