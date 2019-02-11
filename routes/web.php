Route::get('/healthcheck', function () {
    return ['health'=>'ok'];
});