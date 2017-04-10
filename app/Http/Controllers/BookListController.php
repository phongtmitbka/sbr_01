<?php
/**
 * Created by PhpStorm.
 * User: VS9 X64Bit
 * Date: 24/03/2017
 * Time: 2:07 PM
 */

namespace App\Http\Controllers;

use App\Repositories\Contracts\BookRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class BookListController extends Controller
{
    protected $bookRepository;
    protected $categoryRepository;

    public function __construct(
        BookRepositoryInterface $bookRepository,
        CategoryRepositoryInterface $categoryRepository
    )
    {
        parent::__construct();
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
    }
    public function index()
    {
        $books = $this->bookRepository->findLatest();
        $title = trans('book.latest-stories');
        $categories =  $this->categoryRepository->all();

        return view('pages.book-list')->with([
            'books' => $books,
            'categories' => $categories,
            'title' => $title,
        ]);
    }
}
