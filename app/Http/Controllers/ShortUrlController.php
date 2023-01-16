<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use \AshAllenDesign\ShortURL\Classes\Builder;
use \AshAllenDesign\ShortURL\Models\ShortURL;

class ShortUrlController extends Controller
{


   public function create(Request $request)
   {
   	    $validation = Validator::make($request->all(), [
      	'url' => 'required|url'
	    ]);
	    if($validation->fails()){
	      return Redirect::back()->withErrors($validation);
	      return back()->with('warning','URL should be a valid url. ');
	      return $validation->errors();
	    }
	   	$builder = new Builder();

	    $shortURLObject = $builder->destinationUrl($request->url)->make();
	    $shortURL = $shortURLObject->default_short_url;

	    return back()->with('success','URL shortened successfully. ');
   }

   public function update(Request $request, $id)
   {
   	    $url = ShortURL::find($id);
	    $url->url_key = $request->url;
	    $url->destination_url = $request->destination;
	    $url->save();

	    return back()->with('success','URL updated successfully. ');
    }
}
