# Hassan Elmalik
# 6/26/2026
# Assignment 6



def addRecord(filename):
    file = open(filename, "a")
    Name = input("Enter a Name to append: ")
    file.write(f"Name record is: {Name}, ")
    Category = input("Enter a category to append: ")
    file.write(f"Category record is: {Category}, ")
    try:
        Score = int(input("Enter a score to append: "))
        file.write(f"Score record is: {Score}, \n")
    except ValueError:
        print("One of the values was not an integer! Fix the data")
    file.close()
    return Name,Category,Score


def viewRecords(filename):
    file = open(filename, "r")
    for line in file:
        print(line)
    file.close()

def updateRecord(filename, newName, category, score):
    with open(filename, "r") as file:
        records = file.readlines()
    choose = input("Choose a record to mdoify: ")
    if choose == "1":
        newName = input("write another name: ")
        records[choose - 1] = newName
        with open(filename, "w") as file:
            file.writelines(records)
    elif choose == "2":
        category = input("write another category: ")
        return category
    elif choose == "3":
        score = input("write another category: ")
        return score
  


def getMenuChoice():
    choice =  input("Choose one of these options:\n 1. Add a new record\n 2. View all records\n 3. Update an existing record\n 4. Quit\n")
    # fileName = "records.txt"
    if (choice == "1"):
       return 1
    elif(choice == "2"):
        return 2
    elif(choice == "3"):
        return 3
    elif(choice == "4"):
        return 4

def main():
    fileName = "records.txt"
    name, category, score= addRecord(fileName)
    while True:
        choice = getMenuChoice()
        if (choice == 1):
            addRecord(fileName)
        elif(choice == 2):
            viewRecords(fileName)
        elif(choice == 3):
            updateRecord(fileName,name, category, score)
        elif(choice == 4):
            return False
    # return False
main()