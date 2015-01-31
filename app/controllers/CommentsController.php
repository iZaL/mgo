<?php

use Acme\Comment\CommentRepository;
use Acme\EventModel\EventRepository;

class CommentsController extends BaseController {

    /**
     * Category Repository
     *
     * @var Category
     */
    protected $commentRepository;
    /**
     * @var Event
     */
    private $eventRepository;

    public function __construct(CommentRepository $commentRepository, EventRepository $eventRepository)
    {
        $this->commentRepository = $commentRepository;
        $this->eventRepository   = $eventRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $commentable_id = Input::get('commentable_id');

        $commentable_type = Input::get('commentable_type');

        $val = $this->commentRepository->getCreateForm();

        if ( !$val->isValid() ) {
            return Redirect::back()->withInput()->withErrors($val->getErrors());
        }

        if ( !$record = $this->commentRepository->create(array_merge(['user_id' => Auth::user()->id, 'commentable_id' => $commentable_id, 'commentable_type' => $commentable_type], $val->getInputData())) ) {
            return Redirect::back()->with('errors', $this->commentRepository->errors())->withInput();
        }

        return Redirect::back()->with('success', trans('word.comment_posted'));
    }
}
