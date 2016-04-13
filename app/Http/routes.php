
<?php

Route::get('/', function () {
        return view('welcome2');
});
Route::get('/books', 'BookController@getIndex');
Route::get('/book/create', 'BookController@getCreate');
Route::post('/book/create', 'BookController@postCreate');
Route::get('/book/show/{title?}', 'BookController@getShow');
Route::get('/queries/lecture/q1', 'BookController@getQueriesLectureQ1');
Route::get('/queries/lecture/q2', 'BookController@getQueriesLectureQ2');
Route::get('/queries/lecture/q3', 'BookController@getQueriesLectureQ3');
Route::get('/queries/practice/q1', 'BookController@getQueriesPracticeQ1');
Route::get('/queries/practice/q2', 'BookController@getQueriesPracticeQ2');
Route::get('/queries/practice/q3', 'BookController@getQueriesPracticeQ3');
Route::get('/queries/practice/q4', 'BookController@getQueriesPracticeQ4');
Route::get('/queries/practice/q5', 'BookController@getQueriesPracticeQ5');
Route::get('/queries/practice/q6', 'BookController@getQueriesPracticeQ6');

Route::get('/practice', function() {
        $random = new Random();
        return $random->getRandomString(10);
});
Route::get('/bs_practice', function() {
        return view('bootstrap');
});
Route::get('/debug', function() {

        echo '<pre>';

        echo '<h1>Environment</h1>';
        echo App::environment() . '</h1>';

        echo '<h1>Debugging?</h1>';
        if (config('app.debug'))
                echo "Yes";
        else
                echo "No";

        echo '<h1>Database Config</h1>';
        /*
          The following line will output your MySQL credentials.
          Uncomment it only if you're having a hard time connecting to the database and you
          need to confirm your credentials.
          When you're done debugging, comment it back out so you don't accidentally leave it
          running on your live server, making your credentials public.
         */
        //print_r(config('database.connections.mysql'));

        echo '<h1>Test Database Connection</h1>';
        try {
                $results = DB::select('SHOW DATABASES;');
                echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
                echo "<br><br>Your Databases:<br><br>";
                print_r($results);
        } catch (Exception $e) {
                echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
        }

        echo '</pre>';
});

# Restrict certain routes to only be viewable in the local environments
if (App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}
