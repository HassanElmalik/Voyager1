print("Hello, world!")
print("Welcome to Chapter 2 Lab!")

name = input("please enter ur name: ")

print("Hello, " + name + "!")
print(f"Hello, {name}!")

nameLength = len(name)
print(f"Your name has {nameLength} letters.")
print("Your name has",nameLength, "letters.")
print("Your name has " + str(nameLength) + " letters.")

print(f"Your name in uppercase is: {name.upper()}")
print("Your name in uppercase is:", name.upper())
print("Your name in uppercase is: " + name.upper())

age = int(input("what is ur age? "))
print(f"In Five Years you will be {age + 5}")
print("In Five Years you will be",age +5)
print("In Five Years you will be " + str(age +5))

print(f"your name is {name}. you are {age} years old. in five years u will be {age + 5}")
print("your name is", name,"."" you are",age, "years old.in five years u will be",age +5)
