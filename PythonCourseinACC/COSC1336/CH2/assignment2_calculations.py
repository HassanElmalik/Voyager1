# Hassan Elmalik
# Assignment 2
# Description: A collection of programs using input, output, calculations, and strings.

# ------------------------------------------------------------------------

# Program 1 – Simple Interest Calculation

# ------------------------------------------------------------------------

#creating three variables p,r,t where p is the principal amount, r is the interest rate and t is the number of years and the result will be the final interest in t years
p = int(input("write the pricipal amount: "))
r = float(input("write the interest rate: "))
t = int(input("write the number of years: "))
interest = p * r * t
print(f"The final interest = {interest}")

# ------------------------------------------------------------------------

# Program 2 – Temperature Converter

# ------------------------------------------------------------------------

# Creating two variables C,F where C take the temp in celisus from the user and F will converet it to Fahrenheit then display it for the user
C = int(input("Write the temprature in celisus: "))
F = (9/5) * C + 32
print(f"The temperature in Fahrenheit is: {F}")

# ------------------------------------------------------------------------

# Program 3 – Personal Information Summary

# ------------------------------------------------------------------------

# This variable to collect the first name of the user
firstName = input("write your first name: ")
# This variable to collect the last name of the user
lastName = input("write your last name: ")
# This variable to collect the age of the user
age = input("write your age: ")
# This variable to collect the city where the user live
city = input("write the city you live in: ")
# This line to display all the user information using the string format method
print(f"your full name is {firstName} {lastName}, you are {age} years old and you live in {city}")

# ------------------------------------------------------------------------

# Program 4 – Basic Calculator

# ------------------------------------------------------------------------

# Creating two variables asking for two numbers from the user, and converting them to floats to be able to do arethmatic operations on it because the input outcome will be string if we don't coveret it  
number1 = float(input("write the first number: "))
number2 = float(input("write the second number: "))
# Making arethmatic operations: addition (adding two numbers using the + sign), subtraction(subtracting two numbers using the - sign), multiplication(multipling two numbers using the * sign), division(dividing two numbers using the / sign)
print(f"the addition is: {number1 + number2}\nthe substraction is: {number1 - number2}\nthe multiplication is: {number1 * number2}\nthe division is: {number1 / number2} ")