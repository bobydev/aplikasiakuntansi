Route::group(['prefix' => 'users', 'active_menu' => 'user'], function() {
         //user related area
         Route::get('{id}', 'UserController@detail');
         Route::get('{id}/edit', 'UserController@editForm');
         Route::post('{id}/edit', 'UserController@editSave');
     }
 );