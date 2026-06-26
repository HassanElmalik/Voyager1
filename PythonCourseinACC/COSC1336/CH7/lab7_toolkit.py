# Hassan Elmalik
# 6/25/2026
# Lab 7 – Lists, Indexing, and Functions

# In this program we will take items from the user and put it in a list , then we will display it back and display some informations about this list
# and we will give the user the option to search for an item inside the list

# we start with an empty list so when we use the append function inside the for loop it starts to add a new item in every iteration
def getItems ():
    userList = []
    items = int(input("How many items are there? "))
    for i in range(items):
        newItem = input("Enter the new item: ")
        userList.append(newItem)
        print(f"The newest item in the list is {userList[i]}")
        print(f"The current list is: {userList}")
    return userList

def printSummary(items):
    length = len(items)
    # printing the number of items in the list
    print(f"There are {length} items in the list")
    if length > 0:
    # displaying the first item of the list
        print(f"The first item is: {items[0]}")
    lastIndex = length - 1
    # displaying the last item of the list
    print(f"The last item in the list is: {items[lastIndex]}")

def printNumbered(items):
# to print the number of each item we use the variable i (the counter) in for loop and print it in each iteration to show the number of each item
    for i in range(len(items)):
        print(f"{i+1} {items[i]}")
    # i = 0
    # for item in items:
    #     print(f"{i+1} {item}")
    #     i += 1

def searchItems(items):
    target = input("What would you like to search for? ")
# using in keyword will make the compiler move through the list one by one and will return true if it finds the item which the user is searching for
    for item in items:
        print(f"{item} == {target}")
        if item == target:
            return True
    return False

def main():   
    grocires = getItems()
    # grocirestuple = ('hassan', 'gg', 'hh')
    printSummary(grocires)
    printNumbered(grocires)
    itemFound = searchItems(grocires)
    if itemFound:
        print("we found your item")
    else:
        print("we did not find your item")
main()

