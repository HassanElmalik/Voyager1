# Lab 2 – Input, Output, Variables, and Strings
# Hassan Elmalik
# 6/5/2026

print("Hello, world!")
print("Welcome to Chapter 2 Lab!")

# name stores the user's response and I am building a personalized greeting.
name = input("What is your name?")
print(f"Hello, {name}!")

nameLength = len(name)
print(f"Your name has {nameLength} letters.")

# checking string length and changing case might be helpful in real programs as they help in formatting output or validating input
print(f"Your name in uppercase is: {name.upper()}")

age = int(input("what is ur age? "))
print(f"In Five Years you will be {age + 5}")

# I built a longer string by combining text and variables to practice more in formatting strings
print(f"your name is {name}. you are {age} years old. in five years you will be {age + 5}")
