<?php

class AdminHomeController extends AdminBaseController {

    /**
     * Comment Model
     * @var Comment
     */
    protected $commentRepository;

    /**
     * Inject the models.
     */
    public function __construct()
    {
        $this->beforeFilter('Admin');
        parent::__construct();
    }

    /**
     * Show a list of all the comment posts.
     *
     * @return View
     */
    public function index()
    {
        $this->render('admin.home');
    }
}