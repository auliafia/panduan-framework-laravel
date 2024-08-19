<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Constraint\Count;


class paginationController extends Controller
{
    public function index(Request $request)
    {
        // Data array tanpa database
        $users = [
            ['name' => 'User 1', 'email' => 'user1@example.com'],
            ['name' => 'User 2', 'email' => 'user2@example.com'],
            ['name' => 'User 3', 'email' => 'user3@example.com'],
            ['name' => 'User 4', 'email' => 'user4@example.com'],
            ['name' => 'User 5', 'email' => 'user5@example.com'],
            ['name' => 'User 6', 'email' => 'user6@example.com'],
            ['name' => 'User 7', 'email' => 'user7@example.com'],
            ['name' => 'User 8', 'email' => 'user8@example.com'],
            ['name' => 'User 9', 'email' => 'user9@example.com'],
            ['name' => 'User 10', 'email' => 'user10@example.com'],
            ['name' => 'User 11', 'email' => 'user5@example.com'],
            ['name' => 'User 12', 'email' => 'user6@example.com'],
            ['name' => 'User 13', 'email' => 'user7@example.com'],
            ['name' => 'User 14', 'email' => 'user8@example.com'],
            ['name' => 'User 15', 'email' => 'user9@example.com'],
        ];

        $collection = collect($users);
        $perPage = 5;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentPageItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedItems = new LengthAwarePaginator($currentPageItems, count($collection), $perPage);
        $paginatedItems->setPath($request->url());
        return view('users.index', ['users' => $paginatedItems]);
    }

    public function simplePagination()
    {
        $data = [];
        for ($i = 1; $i <= 50; $i++){
            $data[] = "Item $i";
        }

        $perPage = 10;
        $currentPage = request()->get('page', 1);
        $items = array_slice($data, ($currentPage - 1) * $perPage, $perPage);

        $pagination =[
            'total' => count($data),
            'per_page' => $perPage,
            'current_page' => $currentPage,
            'last_page' => ceil(count($data) / $perPage),
            'next_page_url' => ( $currentPage < ceil(count($data) / $perPage)) ? url('/pagination?page='. ($currentPage + 1)) : null,
            'prev_page_url' => ($currentPage > 1) ? url('/pagination?page='. ($currentPage + 1)) : null,
        ];
        return view('users.pagination', compact('items', 'pagination'));
    }

    public function eloquent(Request $request){
        $data = range(1, 50);
        $perpage = 10;
        $currentpage = Paginator::resolveCurrentPage();
        $item = array_slice($data, ($currentpage - 1) * $perpage, $perpage);
        $paginatedData = new Paginator($item, count($data), $perpage);
        $paginatedData->setPath($request-url());

        $paginatedData->appends(['page' =>$currentpage]);

        Log::info('Current Page: '. $currentpage);
        Log::info('Total items: '. count($data));
        Log::info('Per Page: '. $perpage);

        return view('paginator', ['data' => $paginatedData]);
    }    
}