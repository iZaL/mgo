<?php

use Acme\Ad\AdRepository;
use Acme\EventModel\EventRepository;
use Acme\Gallery\GalleryRepository;

class HomeController extends BaseController {

    private $eventRepository;

    private $adRepository;
    /**
     * @var GalleryRepository
     */
    private $galleryRepository;

    /**
     * @param GalleryRepository $galleryRepository
     * @param AdRepository $adRepository
     * @internal param EventRepository $eventRepository
     */
    function __construct(GalleryRepository $galleryRepository, AdRepository $adRepository)
    {
        $this->adRepository    = $adRepository;
        $this->galleryRepository = $galleryRepository;
        parent::__construct();
    }

    public function index()
    {
        $galleries = $this->galleryRepository->getImageSlider();
        $ads    = $this->adRepository->getAds();
        $this->render('site.home', compact('galleries', 'ads'));
    }

    /**
     * @return array|null|static[]
     * just for test purpose
     */
    public function slider()
    {
        $events = $this->eventRepository->getSliderEvents();
        return $events;
    }

}