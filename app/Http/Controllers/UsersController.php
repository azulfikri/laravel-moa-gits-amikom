<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $card = [
            [
                'header' => 'Welcome to Our Website',
                'content' => 'Card Content 1',
                'footer' => 'This is the footer of card 1.'
            ],
            [
                'header' => 'About Us',
                'content' => 'Card Content 2',
                'footer' => 'This is the footer of card 2.'
            ],
            [
                'header' => 'Contact Us',
                'content' => 'Card Content 3',
                'footer' => 'This is the footer of card 3.'
            ]
        ];
        $dataTable = [
            'items' => [
                [
                    'id' => '1',
                    'name' => 'Alice',
                    'email' => 'alice@example.com',
                    'photo' => 'https://randomuser.me/api/portraits/women/0.jpg',
                    'balance' => 1000000,
                    'status' => 'active',
                    'birth' => '1990-01-01',
                ],
                [
                    'id' => '2',
                    'name' => 'Bob',
                    'email' => 'bob@example.com',
                    'photo' => 'https://randomuser.me/api/portraits/men/1.jpg',
                    'balance' => 2000000,
                    'status' => 'pending',
                    'birth' => '1985-05-15',
                ],
                [
                    'id' => '3',
                    'name' => 'Charlie',
                    'email' => 'charlie@example.com',
                    'photo' => 'https://randomuser.me/api/portraits/men/2.jpg',
                    'balance' => 3000000,
                    'status' => 'inactive',
                    'birth' => '1980-12-30',
                ],
            ]
        ];
        return view('welcome', compact('card', 'dataTable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
