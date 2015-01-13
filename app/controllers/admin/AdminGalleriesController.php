<?php

use Acme\Category\CategoryRepository;
use Acme\EventModel\EventRepository;
use Acme\Gallery\GalleryRepository;

class AdminGalleriesController extends AdminBaseController {

    private $galleryRepository;
    /**
     * @var EventRepository
     */
    private $eventRepository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @param GalleryRepository $galleryRepository
     * @param EventRepository $eventRepository
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(GalleryRepository $galleryRepository, EventRepository $eventRepository, CategoryRepository $categoryRepository)
    {
        $this->galleryRepository  = $galleryRepository;
        $this->eventRepository    = $eventRepository;
        $this->categoryRepository = $categoryRepository;
        $this->beforeFilter('Admin');
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $galleries = $this->galleryRepository->getAll();
        $this->render('admin.galleries.index', compact('galleries'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        $categories = ['' => trans('word.choose_category')] + $this->categoryRepository->getByType('Gallery')->lists('name_ar','id');
        $this->render('admin.galleries.create', compact('categories'));
    }

    public function store()
    {
        $val = $this->galleryRepository->getCreateForm();

        if ( !$val->isValid() ) {

            return Redirect::back()->withInput()->withErrors($val->getErrors());
        }

        $this->galleryRepository->create($val->getInputData());

        return Redirect::action('AdminGalleriesController@index')->with('success', trans('word.saved'));

    }

    public function edit($id)
    {
        $gallery    = $this->galleryRepository->findById($id);
        $categories = ['' => trans('word.choose_category')] + $this->categoryRepository->model->where('type', 'Gallery')->lists('name_' . getLocale(), 'id');
        $this->render('admin.galleries.edit', compact('categories', 'gallery'));
    }

    public function update($id)
    {
        $record = $this->galleryRepository->findById($id);

        $val = $this->galleryRepository->getEditForm($id);

        if ( !$val->isValid() ) {

            return Redirect::back()->with('errors', $val->getErrors())->withInput();
        }

        if ( !$this->galleryRepository->update($id, $val->getInputData()) ) {

            return Redirect::back()->with('errors', $this->galleryRepository->errors())->withInput();
        }

        return Redirect::action('AdminGalleriesController@index')->with('success', trans('word.saved'));
    }

    public function destroy($id)
    {
        $gallery = $this->galleryRepository->findById($id);
        $gallery->delete();

        return Redirect::action('AdminGalleriesController@index')->with('success', trans('word.deleted'));
    }

}
