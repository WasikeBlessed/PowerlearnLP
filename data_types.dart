void main() {
  // Integer data type
  int age = 25;
  print('Age: $age');

  // Double data type
  double weight = 65.5;
  print('Weight: $weight');

  // String data type
  String name = 'John Doe';
  print('Name: $name');

  // List data type (List of integers)
  List<int> numbers = [1, 2, 3, 4, 5];
  print('Numbers: $numbers');

  // List data type (List of strings)
  List<String> fruits = ['Apple', 'Banana', 'Orange'];
  print('Fruits: $fruits');

  // Map data type (Dictionary with string keys and integer values)
  Map<String, int> grades = {'Math': 90, 'Science': 85, 'English': 88};
  print('Grades: $grades');

  // Accessing elements in List and Map
  print('First number: ${numbers[0]}');
  print('Last fruit: ${fruits.last}');
  print('Grade in Math: ${grades['Math']}');

  // Modifying elements in List and Map
  numbers[0] = 10;
  print('Updated numbers: $numbers');

  grades['Science'] = 95;
  print('Updated grades: $grades');
}
