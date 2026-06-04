print("I Love Python")
print("I Love Programming")

print(type("Hello"))
print(type("10"))

print ("Hello " + "1")

# ------------------------------------------------------------------------------------------

myStringOne = 'This is Single Quote'
myStringTwo = "This is Double Quote"
print(myStringOne)
print(myStringTwo)

myStringThree = 'This is Single Quote "Test"'
myStringFour = "This is Double Quote 'Test'"
print(myStringThree)
print(myStringFour)

myStringFive = '''First + 'myStringThree'
Second
Third'''
myStringSix = """First + "myStringThree"
Second
Third"""
print(myStringFive)
print(myStringSix)

#---------------------------------------------------------------------------------------------------

# Strings Indexing & Slicing
# 1- All Data in Python are Objects
# 2- Object Contains Elements
# 3- Every Element Has Its Own Index
# 4- Python Uses Zero Based Indexing (Index Start From Zero)
# 5- Use Square Brackets To Access Element
# 6- Permit Accessing Parts Of Strings, Tuples or Lists

myString = "I Love Python"
print(myString[0])
print(myString[9])

print(myString[-1])
print(myString[-6])

print(myString[8:11])
print(myString[3:5])
print(myString[:10])
print(myString[:20])
print(myString[5:])
print(myString[:])

print(myString[::1])
print(myString[::2])
print(myString[::3])
print(myString[::20])

#---------------------------------------------------------------------------------------------------

a="#@#@#@I Love Paython#@#@#@"

print (a.strip("@"))

e="Hassan"
print(e.center(9,"#"))
print(e.center(4,"#"))

#---------------------------------------------------------------------------------------------------

a= "I Love Paython"
b= "          I Love Paython               "

print(len(a))
print(len(b))

b= "          I Love Paython               "
print(b.strip())
print(b.rstrip())
print(b.lstrip())
print(len(b.lstrip()))

b= "I Love 2d Graphics and 3g Technology and paython"
print(b.title())
print(b.capitalize())

c, d, e, f = "1", "11", "111", "1111"
print(c.zfill(4))
print(d.zfill(4))
print(e.zfill(4))
print(f.zfill(4))

a, b = "HassaN", "HassaN"
print(a.upper())
print(b.lower())

#---------------------------------------------------------------------------------------------------

a= "I Love Paython and PHP and MySQL"
print(a.split())
a= "I Love Paython     and PHP    and MySQL"
print(a.split())
a= "I-Love-Paython  -   and PHP-  and-MySQL"
print(a.split("-"))
a= "I-Love-Paython-and PHP-and-MySQL"
print(a.split("-",2))
a= "I-Love-Paython-and PHP-and-MySQL"
print(a.rsplit("-",2))

#---------------------------------------------------------------------------------------------------

a= "I Love Paython"
print(a.index("P"))
print(a.index("P",0,10))

print(a.find("a"))
print(a.find("p"))
print(a.find("P",0,5))

a= "Hassan"
print(a.rjust(10))
print(a.rjust(10,"#"))
print(a.ljust(10))
print(a.ljust(10,"#"))

a= """First Line
Second Line
Third Line"""
print(a.splitlines())
a= "Frist Line\nSecond Line\nThird Line\n "
print(a.splitlines())

#---------------------------------------------------------------------------------------------------

a= "Hello One Two Three One One"
print(a.replace("One","1"))
print(a.replace("One","1",1))
print(a.replace("One","1",5))

a= ["Hassan", "Nabil", "Elmalik"]
print(" ".join(a))
print("\n".join(a))
print("\t".join(a))
print(", ".join(a))

#---------------------------------------------------------------------------------------------------

a= 1
print(type("a"))
print(type(a))
print(type("1"))
print(type("1 + 2"))
print(type('1 + 2'))
print(type([1, 2, "3", "Hello", 4, [1,2,3]]))

a= [1,2,3,["1",5,6],(1,2,3)]
print(a)
print(a[3])
print(a[4])
print(type(a[4]))
print(type((1,2,3,[5,6,7])))

a= (1,2,3,[5,6,7])
print (a)
a= {"H":(1,2,3,[5,6,7]), "p": 2, "c": [1,2,3]}
print (a)
print (type(a))
print (a["H"])
print (a["p"])
print (a["c"])

#---------------------------------------------------------------------------------------------------

# help("keywords")
print("123456\rABCDefg")
print("123456\rABC")

print("\x48\x61\x73\x73\x61\x6E")

#---------------------------------------------------------------------------------------------------

msg = "I Love"
lang = "Paython"
print(msg + " " + lang)

full = msg + " " + lang
print(full)

a, b= str(1), " 2"
print("Hello " + a + b)

#---------------------------------------------------------------------------------------------------

s="I#Love#Python"
print(s[0:9])
print(s[:9])
print(s[5:])
print(s[:9:2])
print(s[:9:3])
print(s[:9:4])
print(s[::4])
print(s[:9:7])
print(s[:9:9])
print(s[:9:10])

#---------------------------------------------------------------------------------------------------

a= "I Love Python"
print(len(a))
a= "       I Love Python      "
print(len(a))

a="####I Love Python####"
print(a.strip("#"))
print(a.rstrip("#"))
print(a.lstrip("#"))

a= "i love 2d graphics and 3g technology an python, php. i am good\nand happy."
print(a.title())
print(a.capitalize())

#---------------------------------------------------------------------------------------------------

a= "I Love PHP And Python And MySQL"
print(a.split())
print(a.rsplit())
a= "I-Love-PHP-And-Python-And-MySQL"
print(a.split())
print(a.split("-"))
print(a.rsplit("-"))
print(a.split("-",3))
print(a.rsplit("-",3))

a= "Hassan"
print(a.center(10))
print(a.center(10,"#"))
print(a.center(5,"#"))

a= "I Love PHP And Python And MySQL"
print(a.count("P"))
print(a.count("And"))
print(a.swapcase())
print(a.swapcase().split())

a= "I Love PHP And Python And MySQL"
print(a.startswith("I"))
print(a.startswith("i"))
print(a.endswith("L"))
print(a.endswith("e", 2, 5))
print(a.endswith("e", 2, 6))

#---------------------------------------------------------------------------------------------------

a= "I Love PHP And Python And MySQL"
print(a.index("P"))
print(a.index("P", 0, 30))
print(a.index("P", -17, -1))

print(a.find("P", -17, -1))
print(a.find("P", -11, -1))
print(a.find("P", 0, 5))

a= """First Line
Second Line
Third Line"""
print(a.splitlines())
print(a.split())
print(a.split("\n"))

a= "First Line\nSecond Line\nThird Line"
print(a.splitlines())
print(a.split())
print(a.split("\n"))

a= "I Love PHP And Python And MySQL"
print(a.istitle())
a= "I Love Php And Python And Mysql"
print(a.istitle())

print(a.isspace())
print(a[1].isspace())

a="i love python And PHP"
print(a.islower())
print(a[0].islower())
a="I LOVE PYTHON AND PHP"
print(a.swapcase().islower())

a="234567"
print(a.isalnum())

#---------------------------------------------------------------------------------------------------

a="I LOVE PYTHON AND PHP"
print(a.replace(" ", "#"))
print(a.replace(" ", "#").split())
print(a.replace(" ", "#").split("#"))
print(a.replace(" ", "#",2).split("#"))
print(a[1].isspace())

a=["i", "Love", "Python"]
print(" ".join(a))

a="I LOVE PYTHON AND PHP"
print("#".join(a.split()))

#---------------------------------------------------------------------------------------------------

name="Hassan"
age=39
rank=10
print("My Name Is: %s and My Age Is: %d and My Rank Is: %f" % (name,age, rank))

n="Hassan"
l="Python"
y=10
print("My Name Is %s I am a %s developer with %d years exp" % (n, l, y))

a=10
print("number is %.2f" % a)

a= "very long string is here"
print("%s" % a)
print("%.6s" % a)

#---------------------------------------------------------------------------------------------------

print("My Name Is {} and my age is {} and my rank is {:f}".format(name,age,rank))

mymoney = 5000192838549
print("My money in bank is {:_d}".format(mymoney))
print("My money in bank is {:,d}".format(mymoney))

x, y, z = 10, 20 ,30 
print ("Hello {} {} {}".format(x,y,z))
print ("Hello {} {} {}".format(z,x,y))
print ("Hello {0} {1} {2}".format(z,x,y))
print ("Hello {2} {1} {0}".format(z,x,y))
print ("Hello {1} {0} {2}".format(x,y,z))
print ("Hello {1:.2f} {0:.4f} {2}".format(x,y,z))

print("my name is {name} and my age is {age}")
print(f"my name is {name} and my age is {age}")

#---------------------------------------------------------------------------------------------------

a = ['one', ' two', 'one', 1, 100.5, True]
print(a[::1])
print(a[::2])
print(a[::5])
print(a[::10])
print(a[0])

a[0:2]=[]
a[0:2]=['A','B']
print(a)

#---------------------------------------------------------------------------------------------------

a= ["Hassan", "Ahmed", 2, 3]

print(a);
a.append("hussein")
a.append(True)
print(a);

b = ["wael","said", False]
a.append(b)
print(a);
print(a[6]);
print(a[6][1]);

c=["One","Two"]

a.extend(b)
a.extend(c)
print(a);

a = ["one", 1, "Hassan", 5, 4 , "Hassan", 2, 3 , "Hassan"]
a.remove("Hassan")
a.remove("Hassan")
print(a)

a = [1, 10 ,9, -10, 50, 5]
a.sort()
print(a)
a.sort(reverse=True)
print(a)

a= ["H", "N", "L", "A"]
a.sort()
print(a)

a = ["one", 1, "Hassan", 5, 4 , "Hassan", 2, 3 , "Hassan"]
a.reverse()
print(a)

#---------------------------------------------------------------------------------------------------

a= ["H", "N", "L", "A"]
a.clear()
print(a)

a= ["H", "N", "L", "A"]
b = a.copy()
print(a)
print(b)
a.append("MH")
print(a)
print(b)

a=[1,2,3,1,4,1,6,1,7]
print(a.count(1))

a = ["one", 1, "Hassan", 5, 4 , "Hassan", 2, 3 , "Hassan"]
print(a.index("Hassan"))
# print(a.index("Hassa"))

a.insert(0,"Test")
a.insert(-1,"Test")
print(a)

print(a.pop(3))
print(a.pop(-1))
print(a)

#---------------------------------------------------------------------------------------------------

a=("Hassan", "Elmalik")
b="Hassan", "Elmalik"
print(a)
print(b)
print(type(a))
print(type(b))

print(a[0])
print(a[1])
print(a[-1])

# a[1] = "H"
# print(a)

a= ("Hassan","Hassan",1,10.5,True)
print(a[1])
print(a[-1])

#---------------------------------------------------------------------------------------------------

a=("Hassan")
b="Hassan"
print(type(a))
print(type(b))
print(len(a))
print(len(b))

a=("Hassan",)
b="Hassan",
print(type(a))
print(type(b))
print(len(a))
print(len(b))

a= ("Hassan","Hassan",1,10.5,True)
b= (1,2,3)
c=a+b
d= a + (20,False,"Elmalik") + b
print(c)
print(d)

a="Hassan"
b=[1,2]
c=(10,20)
print(a*5)
print(b*5)
print(c*5)

a=(1,2,3,1,5,6,1,6,7,1)
print(a.count(1))

print(a.index(3))
print("the postions of 3 is index number: {:d}".format(a.index(3)))
print(f"the postions of 3 is index number: {a.index(3)}")

a=("A", "B", "C")
x, y, z = a
print(x)
print(y)
print(z)

a=("A", "B", 4, "C")
x, y,_, z = a
print(x)
print(y)
print(z)

#---------------------------------------------------------------------------------------------------