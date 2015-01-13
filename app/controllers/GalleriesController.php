<?php

use Acme\Category\CategoryRepository;
use Acme\EventModel\EventRepository;
use Acme\Gallery\GalleryRepository;

class GalleriesController extends BaseController {

    /**
     * @var GalleryRepository
     */
    private $galleryRepository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;
    /**
     * @var EventRepository
     */
    private $eventRepository;


    /**
     * @param GalleryRepository $galleryRepository
     * @param CategoryRepository $categoryRepository
     * @param EventRepository $eventRepository
     */
    public function __construct(GalleryRepository $galleryRepository, CategoryRepository $categoryRepository, EventRepository $eventRepository)
	{
        $this->galleryRepository = $galleryRepository;
        $this->categoryRepository = $categoryRepository;
        $this->eventRepository = $eventRepository;
        parent::__construct();
    }

	/**
	 * Display categories For the Gallery
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = $this->categoryRepository->model
                        ->with(['galleries'])
                        ->where('type','=','Gallery')
                        ->paginate(9);
        return $this->render('site.galleries.index',compact('categories'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $galleries = $this->categoryRepository->findById($id,['galleries']);
        return $this->render('site.galleries.view',compact('galleries'));
    }

    public function getDate($galleryId) {
        $date = '';
        $gallery = $this->model->find($galleryId);
        if($gallery) {
            if( $gallery->date_start ) {
                $date = $gallery->date_start;
            } else {
                if($gallery->event_id) {
//                    dd('event_attached');
                    $event = $this->event->find($gallery->event_id);
                    if($event) {
//                        dd('event_found');
                        if(!empty($event->date_start)) {
                            $date = $event->date_start;
                        }
                    }
                }
            }
        }
        return $date->format('D, M d Y');
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$model = $this->model->find($id);

		if (is_null($model))
		{
			return Redirect::route('countries.index');
		}

		return View::make('countries.edit', compact('country'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Country::$rules);

		if ($validation->passes())
		{
			$model = $this->model->find($id);
			$model->update($input);

			return Redirect::route('countries.show', $id);
		}

		return Redirect::route('countries.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->model->find($id)->delete();

		return Redirect::route('countries.index');
	}

    public function getEvents($id) {
         $this->model->find($id)->events;
    }


    public function showAlbum($id)
    {
//		$model = $this->model->findOrFail($id);
        $album = $this->model->with(array('photos','category'))->find($id);
        return $this->view('site.galleries.album', compact('album'));
    }

}
