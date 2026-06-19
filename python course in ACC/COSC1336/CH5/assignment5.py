# Step 1 – Create the Menu
# this function will display 4 options for the user to choose from, and this menu is useful to give the control to the user and make the program frindely useing.
def display_menu():
    print("\nChoose from the menu:\n1) Name formatter\n2) Average Calculator\n3) Password Checker\n4) Quit")

# Step 2 – Tool #1: Name Formatter

def format_name(firstName,lastName):
    return firstName + " " + lastName

# Step 3 – Tool #2: Average Calculator

def calculate_average(num1,num2,num3):   
    return (num1 + num2 + num3)/3

# Step 4 – Tool #3: Password Checker
import string
def checkPassword(password):
    if(len(password) >= 8 and any(char.isdigit() for char in password) and any(char in string.punctuation for char in password)):
        return True
    else:
        return False

# The main function which will run the application
def main():
    while True:
        display_menu()
        display = input("Enter your choise: ")       
        if(display == "1"):
            print(format_name("Hassan", "Elmalik"))
        elif(display == "2"):
            num1 = int(input("Enter the first number: "))
            num2 = int(input("Enter the second number: "))
            num3 = int(input("Enter the third number: "))
            print(f"The average is {calculate_average(num1,num2,num3)}")
        elif(display == "3"):
            password = input("Enter your password: ")
            if(checkPassword(password) == True):
                print("Your password is valid")
            else:
                print("Your passwrod is not valid")
        elif(display == "4"):
            break
        else:
            print("Invalid choice. Please enter 1, 2, 3 or 4.")

main()
