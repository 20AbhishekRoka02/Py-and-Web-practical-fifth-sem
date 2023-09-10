def frequency(arg_string):
    returnDict = {}
    arg_string = arg_string.split(" ")
    for i in set(arg_string):
        returnDict[i] = 0
    for i in arg_string:
        returnDict[i] +=1
    return returnDict
user_string = input("Enter string: ")
print(frequency(user_string))