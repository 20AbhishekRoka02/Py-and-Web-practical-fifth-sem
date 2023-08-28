user_string = input("Enter string: ")
length = len(user_string)
range_len = range(0,length,2)
for i in range_len:
    print(user_string[i])