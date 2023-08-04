use App\Models\Book;

public function index()
{
    // Sample data for books
    $books = [
        ['id' => 1, 'title' => 'Book 1', 'description' => 'Description of Book 1', 'genre' => 'Fiction', 'price' => 10.99],
        ['id' => 2, 'title' => 'Book 2', 'description' => 'Description of Book 2', 'genre' => 'Mystery', 'price' => 12.99],
        
    ];

    return response()->json($books);
}

public function borrow($id)
{
  
    $book = Book::find($id);

    if (!$book) {
        return response()->json(['error' => 'Book not found'], 404);
    }

    
    $borrowedBooks = Session::get('borrowed_books', []);

    
    if (in_array($book->id, $borrowedBooks)) {
        return response()->json(['error' => 'Book is already borrowed'], 400);
    }

    
    $borrowedBooks[] = $book->id;

 
    Session::put('borrowed_books', $borrowedBooks);

    return response()->json(['message' => 'Book borrowed successfully']);
}

public function return($id)
{
    
$book = Book::find($id);

    if (!$book) {
        return response()->json(['error' => 'Book not found'], 404);
    }

    
    $borrowedBooks = Session::get('borrowed_books', []);

   
    if (!in_array($book->id, $borrowedBooks)) {
        return response()->json(['error' => 'Book is not borrowed'], 400);
    }

    
    $index = array_search($book->id, $borrowedBooks);
    unset($borrowedBooks[$index]);

    
    Session::put('borrowed_books', $borrowedBooks);

    return response()->json(['message' => 'Book returned successfully']);
}
