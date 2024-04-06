def write_to_file(filename, content):
  """
  Writes content to a file in write mode.

  Args:
      filename: The name of the file to write to.
      content: The content to write to the file (string or list of strings).
  """
  try:
    with open(filename, 'w') as file:
      if isinstance(content, list):
        file.writelines(content)
      else:
        file.write(content)
    print(f"Successfully wrote to {filename}")
  except PermissionError:
    print(f"Error: Insufficient permissions to write to {filename}")
  except Exception as e:
    print(f"An unexpected error occurred: {e}")

def read_from_file(filename):
  """
  Reads the contents of a file and displays them on the console.

  Args:
      filename: The name of the file to read from.
  """
  try:
    with open(filename, 'r') as file:
      contents = file.read()
      print(f"Contents of {filename}:\n{contents}")
  except FileNotFoundError:
    print(f"Error: File {filename} not found")
  except Exception as e:
    print(f"An unexpected error occurred: {e}")

def append_to_file(filename, content):
  """
  Appends content to a file in append mode.

  Args:
      filename: The name of the file to append to.
      content: The content to append to the file (string or list of strings).  
  """
  try:
    with open(filename, 'a') as file:
      if isinstance(content, list):
        file.writelines(content)
      else:
        file.write(content + "\n")
    print(f"Successfully appended to {filename}")
  except PermissionError:
    print(f"Error: Insufficient permissions to append to {filename}")
  except Exception as e:
    print(f"An unexpected error occurred: {e}")

# Write initial content
write_to_file("my_file.txt", [
  "This is the first line of text.\n",
  "Here's another line with a number: 42\n",
  "And a final line for now.\n"
])

# Read the contents
read_from_file("my_file.txt")

# Append additional content
append_to_file("my_file.txt", [
  "Appending some more lines...\n",
  "This line was appended.\n",
  "This is the final appended line.\n"
])

# Try reading a non-existent file (handled by error handling)
read_from_file("non_existent_file.txt")
