
total = 0 
count = 0 
num = float(input("Enter a positive number (or -1to finish): "))
while num != -1:
    total += num 
    count += 1 
    num = float(input("Enter a positive number (or -1 to finish): "))
    if count > 0:
        average = total / count 
        print("You entered", count, "numbers. Average:", average) 
    else: print("No numbers were entered.")