<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategorySubRequest;
use App\Http\Requests\UpdateCategorySubRequest;
use App\Repositories\CategorySubRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Category;
use Flash;
use Response;

class CategorySubController extends AppBaseController
{
    /** @var  CategorySubRepository */
    private $categorySubRepository;

    public function __construct(CategorySubRepository $categorySubRepo)
    {
        $this->categorySubRepository = $categorySubRepo;
    }

    /**
     * Display a listing of the CategorySub.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categorySubs = $this->categorySubRepository->all();

        return view('category_subs.index')
            ->with('categorySubs', $categorySubs);
    }

    /**
     * Show the form for creating a new CategorySub.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
       
        return view('category_subs.create')->with('categories',$categories);
    }

    /**
     * Store a newly created CategorySub in storage.
     *
     * @param CreateCategorySubRequest $request
     *
     * @return Response
     */
    public function store(CreateCategorySubRequest $request)
    {
      // dd($request);
        $input = $request->all();

        $categorySub = $this->categorySubRepository->create($input);

        Flash::success('Category Sub saved successfully.');

        return redirect(route('categorySubs.index'));
    }

    /**
     * Display the specified CategorySub.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categorySub = $this->categorySubRepository->find($id);

        if (empty($categorySub)) {
            Flash::error('Category Sub not found');

            return redirect(route('categorySubs.index'));
        }

        return view('category_subs.show')->with('categorySub', $categorySub);
    }

    /**
     * Show the form for editing the specified CategorySub.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categorySub = $this->categorySubRepository->find($id);

        if (empty($categorySub)) {
            Flash::error('Category Sub not found');

            return redirect(route('categorySubs.index'));
        }

        return view('category_subs.edit')->with('categorySub', $categorySub);
    }

    /**
     * Update the specified CategorySub in storage.
     *
     * @param int $id
     * @param UpdateCategorySubRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategorySubRequest $request)
    {
        $categorySub = $this->categorySubRepository->find($id);

        if (empty($categorySub)) {
            Flash::error('Category Sub not found');

            return redirect(route('categorySubs.index'));
        }

        $categorySub = $this->categorySubRepository->update($request->all(), $id);

        Flash::success('Category Sub updated successfully.');

        return redirect(route('categorySubs.index'));
    }

    /**
     * Remove the specified CategorySub from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categorySub = $this->categorySubRepository->find($id);

        if (empty($categorySub)) {
            Flash::error('Category Sub not found');

            return redirect(route('categorySubs.index'));
        }

        $this->categorySubRepository->delete($id);

        Flash::success('Category Sub deleted successfully.');

        return redirect(route('categorySubs.index'));
    }
}
