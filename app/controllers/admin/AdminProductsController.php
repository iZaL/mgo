<?php

use Acme\Blog\BlogRepository;
use Acme\Category\CategoryRepository;
use Acme\Photo\PhotoRepository;
use Acme\Tag\TagRepository;
use Acme\User\UserRepository;

class AdminProductsController extends AdminBaseController {


    /**
     * Post Model
     * @var Post
     */
    protected $productRepository;
    /**
     * @var Category
     */
    private $categoryRepository;
    /**
     * @var User
     */
    private $userRepository;
    /**
     * @var Photo
     */
    private $photoRepository;
    /**
     * @var TagRepository
     */
    private $tagRepository;

    /**
     * Inject the models.
     * @param \Acme\Product\ProductRepository $productRepository
     * @param CategoryRepository|\Category $categoryRepository
     * @param Acme\User\UserRepository $userRepository
     * @param Acme\Photo\PhotoRepository $photoRepository
     * @param TagRepository $tagRepository
     * @internal param BlogRepository|Post $blogRepository
     */
    public function __construct(\Acme\Product\ProductRepository $productRepository, CategoryRepository $categoryRepository, UserRepository $userRepository, PhotoRepository $photoRepository, TagRepository $tagRepository)
    {
        $this->productRepository     = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->userRepository     = $userRepository;
        $this->photoRepository    = $photoRepository;
        $this->beforeFilter('Admin');
        parent::__construct();
        $this->tagRepository = $tagRepository;
    }

    /**
     * Show a list of all the blog posts.
     *
     * @return View
     */
    public function index()
    {
        // Title
        $title = Lang::get('admin.blogs.title.blog_management');
        // Grab all the blog posts
        $posts = $this->productRepository->getAll();
        // Show the page
        $this->render('admin.products.index', compact('posts', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // Title
        $category = $this->select + $this->categoryRepository->getByType('Product')->lists('name_ar', 'id');
        $author   = $this->select + $this->userRepository->getRoleByName('author')->lists('username', 'id');
        $title    = Lang::get('admin.blogs.title.create_a_new_blog');
        $tags     = [''=>''] + $this->tagRepository->getList('name_ar','id');
        // Show the page
        $this->render('admin.products.create', compact('title', 'category', 'author','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $val = $this->productRepository->getCreateForm();

        if ( ! $val->isValid() ) {
            return Redirect::back()->withInput()->withErrors($val->getErrors());
        }

        if ( ! $record = $this->productRepository->create($val->getInputData()) ) {
            return Redirect::back()->with('errors', $this->productRepository->errors())->withInput();
        }

        $tags = is_array(Input::get('tags')) ? array_filter(Input::get('tags')) : [];
        $this->tagRepository->attachTags($record, $tags);

        return Redirect::action('AdminPhotosController@create', ['imageable_type' => 'Product', 'imageable_id' => $record->id]);

    }

    /**
     * Display the specified resource.
     * @param $id
     * @internal param $post
     * @return Response
     */
    public function show($id)
    {
        // redirect to the frontend
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @internal param $post
     * @return Response
     */
    public function edit($id)
    {
        $title    = Lang::get('admin.blogs.title.blog_update');
        $category = $this->select +  $this->categoryRepository->getByType('Product')->lists('name_ar', 'id');
        $author   = $this->select + $this->userRepository->getRoleByName('author')->lists('username', 'id');
        $post     = $this->productRepository->findById($id);

        $tags       = $this->tagRepository->getList('name_ar','id');
        $dbTags =     $post->tags->lists('id');
        // Show the page
        $this->render('admin.products.edit', compact('post', 'title', 'category', 'author','tags','dbTags'));
    }

    /**
     * Update the specified resource in storage.
     * @param $id
     * @internal param $post
     * @return Response
     */
    public function update($id)
    {
        $record = $this->productRepository->findById($id);

        $val = $this->productRepository->getEditForm($id);

        if ( ! $val->isValid() ) {

            return Redirect::back()->with('errors', $val->getErrors())->withInput();
        }

        if ( ! $this->productRepository->update($id, $val->getInputData()) ) {

            return Redirect::back()->with('errors', $this->productRepository->errors())->withInput();
        }

        $tags = is_array(Input::get('tags')) ? array_filter(Input::get('tags')) : [];
        $this->tagRepository->attachTags($record, $tags);

        return Redirect::action('AdminProductsController@edit', $id)->with('success', 'Updated');
    }


    public function delete($id)
    {
        $post = $this->productRepository->find($id);
        // Title
        $title = Lang::get('admin.blogs.title.blog_delete');

        // Show the page
        $this->render('admin.products.delete', compact('post', 'title'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @internal param $post
     * @return Response
     */
    public function getDelete($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @internal param $post
     * @return Response
     */

    public function destroy($id)
    {
        if ($this->productRepository->findById($id)->delete()) {

            return Redirect::action('AdminProductsController@index')->with('success','Deleted');
        }
        return Redirect::action('AdminProductsController@index')->with('error','Could not Delete');

    }

}