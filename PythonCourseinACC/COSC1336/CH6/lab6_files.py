# Hassan Elmalik
# 6/23/2026
# Lab 6 – Files and Exceptions


# Step 1 – Create Your Python File
# Practice writing to files, reading from files, working with numeric data, and handling errors gracefully using try and except.
def main():
    fileName = "numbers.txt"
    writeNumber(fileName)
    total, count = readNumbers(fileName)
    print(f"The total of the numbers is: {total}")
    showResults(total, count)
    safeReadNumbers("C:/Voyager1/PythonCourseinACC/COSC1336/CH6/numbers.txt")

# Step 2 – Writing Data to a File
# Opening the file in write mode makes us able to creat the file and write inside it.
# closing the file , prevent from facing unnecessary errors
def writeNumber(filename):
    file = open(filename, "w")
    for i in range(3):
        number = input("Please enter a number: ")
        file.write(f"{number} \n")
    file.close()

# Step 3 – Reading Numbers From a File
def readNumbers(filename):
    file = open(filename, "r")
    runningTotal = 0
    counter = 0
    for line in file:
        number = int(line.strip())
        print(number)
        runningTotal += number
        counter += 1
    file.close()
    return runningTotal, counter


# Step 4 – Calculations and Output
# Doing the math inside the readNumbers function then returning it and using it as a parameters for the showResults function and finally printing it.
def showResults(total, count):
    print(f"The total is: {total}")

    average = total / count
    print(f"The average is: {average}")

# Step 5 – Handling Errors with try and except
# We are gurding against filenotfound errors, and value errors.
def safeReadNumbers (filename):
    try:
        file = open(filename, "r")
        runningTotal = 0
        for line in file:
            print(f"The line is: {line.strip()}") 
            runningTotal += int(line.strip())
    except FileNotFoundError:
        print("File not found. Please enter valid file path.")
    except ValueError:
        print("One of the values was not an integer! Fix the data")


main()