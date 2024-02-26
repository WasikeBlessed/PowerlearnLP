# Task 1
def addTwo(num1, num2):
    return num1 + num2

# Task 2
def subtractTwo(num1, num2):
    return num1 - num2

# Task 3
def multiplyTwo(num1, num2):
    return num1 * num2

# Task 4
def divideTwo(num1, num2):
    if num2 != 0:
        return num1 / num2
    else:
        return "Error: Cannot divide by zero."

# Task 5
def stringLength(string):
    return len(string)

# Task 6
def getFirstElement(lst):
    if lst:
        return lst[0]
    else:
        return None
