# Name: Hassan Elmalik
# Date: 6/18/2026
# File: capstone1_student_life.py
# Description: This program is a Student Life Assistant that helps a student:
# - Tracking his grades
# - Organizing his budget and spendings
# - Checking student quallification for the club

print("Welcome to Student Life Assistant Program which helps the student to track his grades, organize his budget and spendings and check the student qualification to join the club")

FeatureA = "Grade Helper"
FeatureB = "Budget Checker"
FeatureC = "Eligibility Checker"
choose = input("Choose which feature to run\n feature1 = Grade Helper\n feature2 = Budget Checker\n feature3 = Eligibility Checker: ")




#   Feature A: Grade & Study Helper
#     Input: averageGrade, targetGrade, hoursStudied, and scores
#     Processing: neededGrades, hoursNeeded, avreageScore
#     Output: several text lines that display the needed Grades and the hours needed and the average score.

def featureA ():
    averageGrade = float(input("Please enter your average grade: "))
    targetGrade = float(input("Please enter your target grade: "))
    neededGrades = targetGrade - averageGrade
    if(averageGrade < targetGrade):
        print(f"You need to get {neededGrades} in the next exam to improve your average")
    elif(averageGrade >= targetGrade):
        print("you are in a good spot, great jop!")

    hoursStudied = float(input("How many hours did you study this week? "))
    targetHours = 16
    hoursNeeded = targetHours - hoursStudied
    if(hoursStudied > 0 and hoursStudied < 8):
        print(f"You need to study harder, you need to study {hoursNeeded} hours more")
    elif(hoursStudied >=8 and hoursStudied < 16):
        print(f"You did well this week, but you still need to study {hoursNeeded} hours more")
    elif(hoursStudied >= 16):
        print("You worked hard this week, nice work")
    else:
        print("Enter a proper number")

    score1 = float(input("Enter Your assignment1 score: "))
    score2 = float(input("Enter Your assignment2 score: "))
    score3 = float(input("Enter Your assignment3 score: "))
    averageScore = (score1 + score2 + score3) / 3
    print(f"You have an average score: {averageScore}")


#   Feature B: Budget & Spending Checker
#     Input: income, budget, food spending, and fun spending
#     Processing: totalBudget, totalExpenses, and differences
#     Output: text messages that display the user's income, budget, total budget, food spending, fun spending, total expenses, and the diferrence
#  between his budget and his expenses and what left for him depending on the given conditions. 

def featureB ():
    income = int(input("Whats your weekly income? " + "$"))
    budget = int(input("Enter your budget: " + "$"))
    totalBudget = income + budget
    food = int(input("How much do you spend on food? " + "$"))
    fun = int(input("How much do you spend on fun? " + "$"))
    totalExpenses = food + fun
    differences = totalBudget - totalExpenses

    print(f"Your weekly income is {income}, and your budget is {budget}, so your total budget will be {totalBudget}")
    print(f"You spend on food {food}, and you spend on fun {fun}, so your total spending is {totalExpenses}")
    print(f"Your diferences between your budget and your expenses is {differences}")

    if (differences >= 0 and differences < 10):
        print(f"You spent {totalExpenses}$ which is near your budget, and you are left with {differences}$")
    elif( differences > 10):
        print(f"You spent {totalExpenses}$ which is under your budget, and you are left with {differences}$")
    else:
        print(f"You spent {totalExpenses}$ which is over your budget, and now you need {differences * -1}$")



#   Feature C: Access / Eligibility / Perks Checker
#     Input: membership, age, and GPA
#     Processing: checking the Eligibility of the user to enter the club
#     Output: a text message that shows whether the user is eligble for entering the club or not.

def featureC ():
    membership = input("Enter your membership type: ")
    Age = int(input("Please enter your age: "))
    GPA = input("Is your GPA above 3 (yes/no):  ")

    if(membership.lower() == "gold"):
        if(Age > 18 or GPA.lower() == "yes"):
            print("You have access to the club")
        else:
            print(f"You can't access the club because your age is under 18 and your GPA is under 3")
    elif(membership.lower() == "silver"):
        if(Age > 18 and GPA.lower() == "yes"):
            print("You have access to the club")
        elif(Age < 18):
            print("You can't access the club because your age is under 18")
        elif(GPA.lower() != "yes"):
            print("You can't access the club because your GPA is under 3")
    else:
        print("You need to have a membership to join the club")

def main ():
    if(choose == FeatureA or choose == "feature1"):
        featureA()
    elif(choose == FeatureB or choose == "feature2"):
        featureB()
    elif(choose == FeatureC or choose == "feature3"):
        featureC()
    
main()
