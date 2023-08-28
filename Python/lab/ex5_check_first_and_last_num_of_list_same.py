num = int(input("Enter number of elements to add in list: "))
rangeLen = range(num)
user_list = []

for i in rangeLen:
    print("Enter element no.", i+1, " : ", end="")
    user_num = int(input())    
    user_list.append(user_num)

if user_list[0] == user_list[-1]:
    print("First and last numbers are same.")
else:
    print("First and last numbers are not same.")
