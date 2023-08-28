num = int(input("Enter integer: "))
new_num=0
store_orginal_num = num
while num>0:
    new_num = new_num*10 + num%10
    num = num // 10
print("Digits of ", store_orginal_num, " extracted in reverse order is: ", new_num)