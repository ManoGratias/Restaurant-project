<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller


{

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image',
            'prix' => 'required|numeric',
            'description' => 'required|string',
        ]);

         //$data = $request->all();

         if($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('public/images');
            $data['image'] = $path;
         }
         $menu = Menu::create($data);

         return redirect()->back()->with('success', 'Le menu e été enregistré avec succès.');
    }


}
