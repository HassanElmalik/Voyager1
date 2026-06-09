# Hassan Elmalik
# 6/9/2026
# Lab 3

# Part 1
total = float(input("Please enter your pruchase total: "))
# Compare input to 50. Display message if >= 50
if (total >= 50):
    print("You have earend a coupon.")

# Part 2

# Here we used if,else to display two outcomes
score = int(input("Please enter your test score (0-100): "))
if(score >= 70):
    print("You passed!")
else:
    print("You did not pass.")

# Part 3

grade = int(input("Enter your numeric grade value: "))
print(grade)
# Testing grade from 90 to 100
if(grade >= 90 and grade <= 100):
    print("You got an A! Great jop.")
# Testing grade from 80 to 89
elif(grade >= 80 and grade <= 89):
    print("You got a B! Nice work")
# Testing grade from 70 to 79
elif(grade >= 70 and grade <= 79):
    print("You got a C! Nice work")
# Testing grade over than 100
elif(grade > 100):
    print("extra credit")
else:
    print("You shall not pass")

# Part 4

gpa = float(input("Please enter your gpa: "))
credits = int(input("Please enter your credit hours: "))
# This code checks if both gpa and credits fullfill the given conditions (both must be true)
if (gpa >= 3 and credits >=12):
    print("You got a scholarship!")
if (gpa >= 3):
    if (credits >= 12):
        print("You got a scholarship!")

# Part 5

age = int(input("Please enter your age: "))
membership = input("Are you a member? (yes/no): ")
if (membership.lower() == "yes"):
    membershipbool = True
else:
    membershipbool = False

# This code checks if any of the statements fullfill the given conditions (any of the statements can be true)
if (age < 18 or age >= 65 or membershipbool):
    print("You qualify for a travel discount!!")

# Part 6

password = input("Please enter your password: ")
# length = len(password) >= 8
# print(length)

# Checking the length of the passowrd
if (len(password) >= 8):
    length = True
else:
    length = False
print(length)

# Checking the existance of the @ symbol in the password
if ('@' in password):
    atSymbol = True
else:
    atSymbol = False

# Checking if the passowrd has spaces in it
if (' ' in password):
    space = True
else: 
    space = False

# Checking if all the conditions are true then the password is strong
strongPassword = (length and atSymbol and  not space)

if(strongPassword):
    print("Wow, strong password")
else:
    print("weak pass")
    print(f"the length is: {len(password)}")
    print(f"your password contains @: {atSymbol}")
    print(f"your password contains spaces: {space}")

# Part 7

secretWord = "Python"

# The string comparison is case sensitive and to overcome this you have to use functions like (lowercase(), capitalize()) for both sides of the comparison 
guess = input("Guess the secret word!: ")
if (guess == secretWord):
    print("You guessed the word!")
else:
    print("Try again!")

