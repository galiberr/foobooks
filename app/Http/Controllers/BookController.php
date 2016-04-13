<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller {

        /**
         * Responds to requests to GET /books
         */
        public function getIndex() {
                $books = \App\Book::all();

                if (!$books->isEmpty()) {
                        echo "You have the following books available:<br />";
                        echo "<ol>";
                        // Output the books
                        foreach ($books as $book) {
                                echo "<li>" . $book->title . '</li>';
                        }
                        echo "</ol>";
                } else {
                        echo 'No books found';
                }
        }

        /**
         * Responds to requests to GET /books/show/{id}
         */
        public function getShow($title = null) {
                return view('books.show', [
                    'title' => $title,
                ]);
        }

        /**
         * Responds to requests to GET /books/create
         */
        public function getCreate() {
                return view('books.create');
        }

        /**
         * Responds to requests to POST /books/create
         */
        public function postCreate(Request $request) {
                $this->validate($request, [
                    'title' => 'required|min:3',
                    'author' => 'required'
                ]);
                return 'Add the book: ' . $request->input('title');
                #return redirect('/books');
        }

        public function getQueriesLectureQ1(Request $request) {
                $book = \App\Book::where('author', 'Alvin Toffler')->first();

                if ($book) {
                        return $book->title;
                } else {
                        return 'Book not found.';
                }
        }

        public function getQueriesLectureQ2(Request $request) {
# First get a book to update
                $book = \App\Book::where('author', 'LIKE', '%Stout%')->first();

# If we found the book, update it
                if ($book) {

                        # Give it a different title
                        $book->title = 'The Silent Speaker';

                        # Save the changes
                        $book->save();

                        echo "Update complete; check the database to see if your update worked...";
                } else {
                        echo "Book not found, can't update.";
                }
        }

        public function getQueriesLectureQ3(Request $request) {
                $book = \App\Book::where('author', 'LIKE', '%Angelou%')->first();

# If we found the book, delete it
                if ($book) {

                        # Goodbye!
                        $book->delete();

                        return "Deletion complete; check the database to see if it worked...";
                } else {
                        return "Can't delete - Book not found.";
                }
        }

        public function getQueriesPracticeQ1(Request $request) {
                $books = \App\Book::orderBy('id', 'desc')->take(5)->get();
                if (!$books->isEmpty()) {
                        echo "These were the last 5 (or fewer) books you entered:<br />";
                        echo "<ol>";
                        // Output the books
                        foreach ($books as $book) {
                                echo "<li>" . $book->title . '</li>';
                        }
                        echo "</ol>";
                } else {
                        echo 'No books found';
                }

        }

        public function getQueriesPracticeQ2(Request $request) {
                $books = \App\Book::where('published', '>', '1950')->orderBy('id')->get();
                if (!$books->isEmpty()) {
                        echo "These are all books in your table published after 1950:<br />";
                        echo "<ol>";
                        // Output the books
                        foreach ($books as $book) {
                                echo "<li>" . $book->published . ' ' . $book->title . '</li>';
                        }
                        echo "</ol>";
                } else {
                        echo 'No books found';
                }
        }

        public function getQueriesPracticeQ3(Request $request) {
                $books = \App\Book::orderBy('title')->get();
                if (!$books->isEmpty()) {
                        echo "These are all books in your table in alphabetical order by title:<br />";
                        echo "<ol>";
                        // Output the books
                        foreach ($books as $book) {
                                echo "<li>" . $book->title . '</li>';
                        }
                        echo "</ol>";
                } else {
                        echo 'No books found';
                }
        }

        public function getQueriesPracticeQ4(Request $request) {
                $books = \App\Book::orderBy('published', 'desc')->get();
                if (!$books->isEmpty()) {
                        echo "These are all books in your table sorted descending by year of publication:<br />";
                        echo "<ol>";
                        // Output the books
                        foreach ($books as $book) {
                                echo "<li>" . $book->published . ' ' . $book->title . '</li>';
                        }
                        echo "</ol>";
                } else {
                        echo 'No books found';
                }
        }
        
        public function getQueriesPracticeQ5(Request $request) {
                $books = \App\Book::where('author', '=', 'Alvin Toffler')->update(['author' => strtolower('alvin toffler')]);
                echo "Done!<br />";
                
                /*
                if (!$books->isEmpty()) {
                        
                        // Output the books
                        $count = count($books);
                        foreach ($books as $book) {
                                $book->author = strtolower($book->author);
                                $book->save();
                        }
                        echo "Updated " . $count . " books.<br />";
                } else {
                        echo 'No books found';
                }
                 * 
                 */
        }
        
        public function getQueriesPracticeQ6(Request $request) {
                $books = \App\Book::where('author', '=', 'J. K. Rowling')->delete();
                echo 'Done!<br />';
        }
}

# eoc