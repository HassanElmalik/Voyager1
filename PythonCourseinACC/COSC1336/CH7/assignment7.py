# Hassan Elmalik
# 6/26/2026
# Assignment 7 – Lists and Tuples (Function-Based)



def getStudentCount():
    students = int(input("How many students do you want to enter? "))
    return students

# When using multiple lists that store related data, index alignment means that the information at the same index in each list belongs together
def getStudents(count):
    studentsNames = []
    for i in range(count):
        names = input("Enter student name: ").strip()
        studentsNames.append(names)
    return studentsNames

def getScores(count):
    studentsScores = []
    for i in range(count):
        scores = input("Enter student score: ")
        studentsScores.append(scores)
    return studentsScores

# A tuple is appropriate for data that should remain constant, they help protect the integrity of the data.
courseInfo = ("course name", "assignment number", "semester")

def printReport(courseInfo, names, scores):
    for i in courseInfo:
        print(f"{i}")
    for i in range(len(names)):
        print(f"{names[i]} : {scores[i]}")

    print(f"There are {len(names)} students are enterd")

def getHighest(scores):
    highest = max(scores)
    return highest

# we use the for loop to loop over the names list then by if statement we check every name on the list with the value the user entered
# we use the name entered by the user and the index function to get the index number then we put it in the scores list to get the score opposite to this index.  
def searchStudent(names,scores):
    search = input("What name you need to search for? ").strip()
    for name in names:
        if name == search:
            nameIndex = names.index(search)
            print(f"{name}\'s score is: {scores[nameIndex]}")
            return False
        else:
            print("The name you entered not in the list")
            return False
    
           
def main():
    count = getStudentCount()
    names = getStudents(count)
    scores = getScores(count)
    highestScore = getHighest(scores)
    highestScoreIndex = scores.index(highestScore)
    printReport(courseInfo,names, scores)
    print(f"The name is {names[highestScoreIndex]} The highest score is: {highestScore}")
    searchStudent(names,scores)


main()