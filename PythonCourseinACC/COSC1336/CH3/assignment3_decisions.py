# # Hassan Elmalik
# # 6/11/2026
# # assignment 3


# Part 1 – Movie Ticket Assistant

# Creating variable age to collect the user age
age = int(input("Please enter your age: "))
# Using if,elif, and else to check the conditions and print the outcome accordingly
if (age < 13):
    print("Your ticket price is $8")
elif(age >= 13 and age <= 64):
    print("Your ticket price is $12")
else:
    print("Your ticket price is $10")


# Part 2 – Bank Account Warning System

balance = int((input("Please enter your balance: ")))
withdrawals = int(input("Please enter your withdrawals: "))

# Using if and "and" to check if both conditions are true not only one
if(balance < 100 and withdrawals > 200):
    print("Warning")


# Part 3 – Campus Access Check

enroll = input("Are you enrolled in the course? (Yes,No): ")
card = input("Do you have access card? (Yes,No): ")
member = input("Are you accompained by a faculty member? (Yes,No): ")

# Usinf if and "or" to check if any of the given conditions is true then all the statement will be true
if(enroll.lower() == "yes" or card.lower() == "yes" or member.lower() == "yes"):
    print("You can access the lab!")
else:
    print("You can not access the lab!")


# Part 4 – Scholarship Tier Calculator

gpa = float(input("Please enter your GPA: "))
creditHours = int(input("Please enter your credit hours: "))

# In this part we used if,elif,elif,else to check the eligibility through 4 intervals and determine the user's eligible tire accordingly
if(gpa >= 3.0  and gpa < 3.5 and creditHours >= 12):
    print("You are in the Silver tire")
elif(gpa >= 3.5 and gpa < 3.8 and creditHours >= 12):
    print("You are in the Gold tire")
elif(gpa >= 3.8 and creditHours >= 12):
    print("You are in the Platinum tire")
else:
    print("You are not eligible")


# Part 5 – Password Validator

password = input("Please enter your password:")

# Using if and "and" to check if all 4 conditions are true to make the password vaild otherwise will not be valid
if((len(password) >= 10) and ("!" in password) and (" " not in password)  and (not password[0].isdigit())):
    print("You have a valid password")
else:
    print("You do not have a valid password")

# if(len(password) >= 10):
#     if("!" in password):
#         if(" " not in password):
#             if(not password[0].isdigit()):    
#                 print("You have a valid password")
#             else:
#                 print("You do not have a valid password")


# Part 6 – Registration Code Check

code = input("Please enter the code: ")

# checking if the given code is valid with exact matching it with the code we have in our memory 
if(code == "FUND-PY-2025"):
    print("Access granted")
else:
    print("Access not granted")
