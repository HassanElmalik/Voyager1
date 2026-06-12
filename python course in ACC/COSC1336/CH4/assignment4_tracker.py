# Hassan Elmalik
# 6/12/2026
# assignment 4


# Part 1 – Welcome + Setup

print("Welcome to a Python program that simulates a simple “Daily Tracker” system")
name = input("what is your name? ")
print(f"Welcome {name}")


# Part 2 – Repeated Data Entry

# Initializing the variables that will be used through our loop
studying = int(input(("Please enter your number of muintes you spent for studying: ")))
exercising = int(input(("please enter the number of minutes you spent exercising: ")))
totalStudy = 0
totalExercise = 0
days = 0

# starting loop using while because we don't know the number of the iterations the user gonna make
# the loop will keep working as long as studying and exercising are True
while studying and exercising:
# Adding 1 to variable days in each iteration
    days += 1
# Using if condition to prevent values less than 0 to be processed
    if studying >= 0 and exercising >= 0:
# Calculating Studing and Exercising totals by adding thier values with each iteration and without adding the days that have values less than 0
        totalStudy += studying
        totalExercise += exercising
        ask = input("Do you want to enter another day? if not write (stop): ")
# Checking the validation of a string "stop" and if it True we exite the loop by using break keyword
        if ask.lower() == "stop":
            break
# If the condition is false we continue the loop and keep asking the user for another day data
        studying = int(input(("Please enter your number of muintes you spent for studying: ")))
        exercising = int(input(("please enter the number of minutes you spent exercising: ")))
# with the elif we check if the values are less than 0 
# if it less than 0 the program will continue asking the user for data without adding the invalid one 
    elif studying < 0 or exercising < 0:
        print ("Not a valid number, please try again")
        studying = int(input(("Please enter your number of muintes you spent for studying: ")))
        exercising = int(input(("please enter the number of minutes you spent exercising: ")))

# Calculating the average study and exercise minutes per day
averageStudyMinutes = totalStudy / days
averageExerciseMinutes = totalExercise / days
# Displaying the results to the user
print (f"your total study is {totalStudy} and your total exercise is {totalExercise} and total days entered are {days}")
print (f"Your average study minutes is {averageStudyMinutes} and your average exercise minutes is {averageExerciseMinutes}")
# Adding an extra feature by displaying a message if the user's total study is greater than his total exercise
if totalStudy > totalExercise:
    print ("Your total stuady is greater than your total exercise!")