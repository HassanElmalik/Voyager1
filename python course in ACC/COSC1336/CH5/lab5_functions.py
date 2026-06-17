# Hassan Elmalik
# 6/16/2026
# Lab 5 – Functions (Expanded Outline + Examples)




# Step 2 – Your First Function

# Creating a function that should print a welcoming message when it called
def displayWelcome():
    print("Welcome to the program!")
    print("Today we will learn how to use functions!")

displayWelcome()

# -------------------------------------------------------------------------------------

# Step 3 – Using Parameters

def personalizedGreeting(name):
    print(f"Welcome to the program, {name}")

personalizedGreeting("Hassan")

lastName = "Elmalik"
otherName = "Austin"
number = 14

personalizedGreeting(lastName)
personalizedGreeting(otherName)
personalizedGreeting(number)

# -------------------------------------------------------------------------------------

# Step 4 – Returning Values

def getAverage(num1, num2):
    sum = num1 + num2
    avg = sum / 2
    return avg
# The returned values can be stored in a variable, printed, or used inside an expression.
# This make it better than printed values inside the function.
average = (getAverage(2, 4))
print(average)

# -------------------------------------------------------------------------------------

# Step 5 – Local vs Global Variables

globalVariable = "Monday"

def scopeFunction():
    print(globalVariable)
    localVariable = "Tuseday"
    print(localVariable)

# modifing the global value inside the function will not effect it outside the function unless we use the (global) keyword.
# However if we used the (global) keyword and modified the variable inside the function, this will modify the variable every time we call this function.
scopeFunction()
# print(localVariable)

# -------------------------------------------------------------------------------------

# Step 6 – Default Parameters

#  Default parameters allow you to make certain arguments optional, providing flexibility when calling the function.
def calculateTotal(price, taxRate = 0.08):
    total = price + (price * taxRate)
    return total

# def calculateTotal(price, taxRate = 0.08):
#     return  price + (price * taxRate)

totalPrice = calculateTotal(10)
print(f"The total cost is: {totalPrice}")

totalPrice = calculateTotal(10, .5)
print(f"The total cost is: {totalPrice}")

# -------------------------------------------------------------------------------------

# Step 7 – Helper Functions

def isEven(number):
    if number % 2 == 0:
        return True
    else: 
        return False
    # return number % 2

print(isEven(0))

#  Calling a function from inside another function is a great way to keep your code organized, modular, and easy to read.
def printEvenNumbers(numList):
    for number in numList:
     if isEven(number):
         print(number)

printEvenNumbers([1,2,3,4,5,6,7,8,9,10])

def printOddNumbers(numList):
    for number in numList:
        if not isEven(number):
            print(number)
printOddNumbers([1,2,3,4,5,6,7,8,9,10])