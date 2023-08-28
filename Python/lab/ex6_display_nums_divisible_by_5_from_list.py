user_list = []
length = int(input("Enter number of elements to be entered in list: "))
rangeLen = range(length)
for i in rangeLen:
    print("Enter element no.", i, " : ", end="")
    num = int(input())
    user_list.append(num)

for i in user_list:
    if i%5==0:
        print(i," is divisible by 5.")