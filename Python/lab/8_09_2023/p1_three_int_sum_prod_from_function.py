def cal_sum_prod(num1,num2,num3):
    return num1+num2+num3, num1*num2*num3

n1 = int(input("Enter first integer: "))
n2 = int(input("Enter second integer: "))
n3 = int(input("Enter third integer: "))
result = cal_sum_prod(n1,n2,n3)

print("Sum is: ", result[0])
print("Product is: ", result[1])


