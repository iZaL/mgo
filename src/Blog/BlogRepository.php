<?php namespace Acme\Blog;

use Acme\Core\BaseRepository;
use Acme\Core\CrudableTrait;
use Blog;
use Illuminate\Support\MessageBag;

class BlogRepository extends BaseRepository {

    use CrudableTrait;
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    public function __construct(Blog $model)
    {
        parent::__construct(new MessageBag);

        $this->model = $model;
    }

    public function getAll($with = [])
    {
        return $this->model->with($with)->get();
    }

    public function getConsultancyPosts()
    {
        return $this->model->with(['category', 'photos', 'author'])
            ->select('posts.*')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.name_en', '=', 'consultancy')
            ->orderBy('posts.created_at', 'DESC')
            ->paginate(10);
    }

    public function getAboutUs()
    {
        return $this->model->select('posts.*')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.name_en', '=', 'about')
            ->where('categories.type', '=', 'Post')
            ->orderBy('posts.created_at', 'DESC')
            ->limit(1);
    }

    public function getHomePageDescription()
    {
        return $this->model->select('posts.*')
            ->leftJoin('categories', 'categories.id', '=', 'posts.category_id')
            ->where('categories.name_en', '=', 'homepage')
            ->where('categories.type', '=', 'Post')
            ->orderBy('posts.created_at', 'DESC')
            ->limit(1)
            ->get()
            ;
    }
}