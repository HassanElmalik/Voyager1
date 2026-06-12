# Hassan Elmalik
# 6/11/2026
# Lab 4 – Repetition Structures


# Step 2 – While Loop Practice

number = int(input("Please enter a number: "))
# Using while loop to repeat the print until the condition get valid
while number >= 0:
    number = int(input("Please enter a number: "))
    if number < 0:
        print("You entered a valid number!")


# Step 3 – For Loop Practice

times = int(input("How many times should the masseage repeat? "))
# Here for is better than while as we know the range of the itterations
for i in range(times):
    print(f"ALERT {i+1}")
# i = 0
# while i < times:
#     print(f"YOLO {i+1}")
#     i += 1


# Step 4 – Running Total

numbers = int(input("How many numbers do you want to enter? "))
total = 0
# total will be set to 0 at first then the for loop will keep adding (userNumber) to it (numbers) times 
for i in range(numbers):
    userNumber = int(input("Please enter a number: "))
    total += userNumber
print(f"The total is: {total}")
# i= 0
# while i < numbers:
#     userNumber = int(input("Please enter a number: "))
#     total += userNumber
#     i += 1


# Step 5 – Input Validation

score = int(input("Please enter a test score (0-100): "))
# while loop here will keep checking these conditions and will keep repeating the code inside till the user write a number out this range
while score <= 0 or score >= 100:
    score = int(input("Score invalid. Please enter a test score (0-100): "))
print("The score is: ", score)