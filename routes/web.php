<?php

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/


Route::get('user-registration','RegistrationController@getUserAutoActiveRegistration');

Route::get('auto-active-registration','RegistrationController@getUserAutoActiveRegistration');
Route::post('auto-active-registration','RegistrationController@postUserAutoActiveRegistration');

Route::get('email-send-registration','RegistrationController@getUserEmailSendRegistration');
Route::post('email-send-registration','RegistrationController@postUserEmailSendRegistration');

Route::get('auto-active-login','LoginController@getAutoActiveUserLogin');
Route::post('auto-active-login','LoginController@postAutoActiveUserLogin');

Route::get('auto-active-user-forget-password','ForgotPasswordController@getAutoActiveUserForgetPassword');
Route::post('auto-active-user-forget-password','ForgotPasswordController@postAutoActiveUserForgetPassword');

Route::get('auto-active-user-reset-password','ResetPasswordController@getAutoActiveUserResetPassword');

Route::get('active/{email}/{activationCode}','ActivationController@getActiveUser');


Route::get('reset/{email}/{resetCode}','ResetPasswordController@getAutoActiveUserResetPassword');

Route::post('reset/{email}/{resetCode}','ResetPasswordController@postAutoActiveUserResetPassword');



Route::group(['middleware' => ['login']], function () {
    
    Route::get('logout','LogoutController@getLogout');
    
    Route::get('user-changer-password','ChangePasswordController@getAutoActiveUserChangePassword');
    
    Route::post('user-changer-password','ChangePasswordController@postAutoActiveUserChangePassword');

    Route::get('edit-user-profile','UserProfileController@getUserProfile');
    
    Route::post('edit-user-profile','UserProfileController@postUserProfile');
    // resource route 
    Route::get('dashboard','DashboardController@getDashbord');  
    Route::resource('blogs','BlogController');
    Route::resource('testimonials','TestimonialController');
    Route::get('testimonials_delete/{id}','TestimonialController@destroy');
    Route::resource('sliders','SliderController');
    Route::resource('categories','CategoriesController');
    Route::resource('our-team','OurTeamController');
    Route::resource('products','ProductController');
    Route::get('change-footer-text','ChangeFooterTextController@getFootertext');  
    Route::post('change-footer-text','ChangeFooterTextController@postFootertext');
    // resource route 
    Route::get('change-contact','ChageConttactController@getContuct');  
    Route::post('change-contact','ChageConttactController@postContuct'); 
    
    Route::get('all-orders','OrdersController@getOrders');
    Route::get('delivered-order','OrdersController@getDeliveredOrders');
    Route::get('pandding-order','OrdersController@getPanddingOrders');
});

// cart controller

Route::get('all-shopping-items','CartController@index');
Route::get('remove-all-item','CartController@cartDestroy');

Route::get('add-item/{id}','CartController@addItem');

Route::post('add-item','CartController@postAddItem');



Route::get('update-item/{rowId}','CartController@updateItem');
Route::post('update-item/{rowId}','CartController@updateItem');

Route::get('delete-item/{rowId}','CartController@itemDelete');

// cart controller


// Comments
Route::post('comments/{post_id}',   ['uses' => 'CommentController@store',   'as' => 'comments.store']);
Route::get('comments/{id}/edit',    ['uses' => 'CommentController@edit',    'as' => 'comments.edit']);
Route::put('comments/{id}',         ['uses' => 'CommentController@update',  'as' => 'comments.update']);
Route::delete('comments/{id}',      ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
Route::get('comments/{id}/delete',  ['uses' => 'CommentController@delete',  'as' => 'comments.delete']);
// Comments



Route::get('/','FrontPageController@getHome');  

Route::get('about-us','FrontPageController@getAbout');  

Route::get('contact','FrontPageController@getContact');  

Route::get('gallery','FrontPageController@getGallery');  

Route::get('aquarium-fish','FrontPageController@getAqueaFish');  

Route::get('aquarium-food','FrontPageController@getAqueaFood');  

Route::get('aquarium-accessories','FrontPageController@getAccessories');  

Route::get('aquarium-plants','FrontPageController@getPlants');  

Route::get('single-product/{id}','FrontPageController@getSingleProduct');  

Route::get('customer-service','FrontPageController@getCustomerService');  

Route::get('warranty','FrontPageController@getWarranty');  

Route::get('orders-returns','FrontPageController@getOrdersAndReturns'); 

Route::get('faq','FrontPageController@getfaq');  

Route::get('all-blogs','FrontPageController@getAllBlogs');  

Route::get('single-blog/{id}','FrontPageController@getSingleBlog');  

Route::get('product/{id}','FrontPageController@getProduct');  

Route::get('checkout','CheckOutController@getCheckOut');

Route::get('guest-checkout','CheckOutController@getGuestCheckOut');

Route::post('orders','CheckOutController@postOrders');  

Route::get('user-signin','FrontPageController@getUserSignIn');  

Route::post('user-signin','FrontPageController@postUserSignIn');  

Route::get('user-signup','FrontPageController@getUserSignUp');  

Route::post('user-signup','FrontPageController@postUserSignUp');  


Route::get('modal-data','FrontPageController@getModalData');  

