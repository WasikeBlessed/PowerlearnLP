// Interface for printable objects
abstract class Printable {
  void printDetails();
}

// Base class for items
class Item {
  final String name;
  final double price;

  Item(this.name, this.price);

  // Method to display basic item information
  void displayInfo() {
    print('Name: $name, Price: \$$price');
  }
}

// Class for books inheriting from Item and implementing Printable
class Book extends Item implements Printable {
  final String author;

  Book(String name, double price, this.author) : super(name, price);

  // Override displayInfo method to include author
  @override
  void displayInfo() {
    super.displayInfo();
    print('Author: $author');
  }

 
  @override
  void printDetails() {
    displayInfo();
  }
}

List<String> readDataFromFile(String filePath) {
  return [
    'Book1,10.99,Author1',
    'Book2,15.50,Author2',
  ];
}

void main() {
  List<String> bookData = readDataFromFile('books.txt');
  List<Book> books = [];
  for (String data in bookData) {
    List<String> bookDetails = data.split(',');
    books.add(Book(bookDetails[0], double.parse(bookDetails[1]), bookDetails[2]));
  }
  for (Book book in books) {
    book.printDetails();
    print('---');
  }
}
