# Name: Hassan Elmalik
# Date: 6/11/2026
# File: capstone1_student_life.py
# Description: This program is a Student Life Assistant that helps a student:

# Feature A – Grade & Study Helper

average = float(input("Please enter your average grade: "))
target = float(input("Please enter your target grade: "))
neededGrades = target - average
if(average < target):
    print(f"You need to improve your gardes and add {neededGrades} to your average")
elif(average >= target):
    print("you are in a good place, great jop!")

hours = float(input("Tell me how many hours did you study this week? "))
if(hours < 8):
    print("You need to study harder than that")
elif(hours >=8 and hours <= 16):
    print("You did well this week, but you need to do a little more")
elif(hours > 16):
    print("You worked hard this week, nice work")

score1 = float(input("Enter Your assignment1 score: "))
score2 = float(input("Enter Your assignment2 score: "))
score3 = float(input("Enter Your assignment3 score: "))
average2 = (score1 + score2 + score3) / 3
print(f"Your average score is: {average2}")

