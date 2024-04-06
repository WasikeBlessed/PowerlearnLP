class Person:
  """
  This class represents a person with a name, age, and gender.
  """
  def __init__(self, name, age, gender):
    """
    Initializes a Person object with the given name, age, and gender.
    """
    self.name = name
    self.age = age
    self.gender = gender

  def introduce(self):
    """
    Prints a message introducing the person with their name, age, and gender.
    """
    print(f"Hello! My name is {self.name}. I am {self.age} years old and identify as {self.gender}.")

# Create an instance of the Person class
person1 = Person("Alice", 30, "female")

# Call the introduce method to display the person's information
person1.introduce()
