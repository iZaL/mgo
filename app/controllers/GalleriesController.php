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
        $this->galleryRepository  = $galleryRepository;
        $this->categoryRepository = $categoryRepository;
        $this->eventRepository    = $eventRepository;
        parent::__construct();
    }

    /**
     * Display categories For the Gallery
     *
     * @return Response
     */
    public function index()
    {
        $galleries = $this->galleryRepository->getAllPaginated(['photos', 'category']);

        $this->render('site.galleries.index', compact('galleries'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $album = $this->galleryRepository->findById($id, ['photos', 'category']);
        $this->render('site.galleries.view', compact('album'));
    }

}
