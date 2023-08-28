def calculation(num1,num2):
    return num1+num2, num1-num2
    
x = float(input("x = "))
y = float(input("y = "))
result = calculation(x,y)
print("x + y = ", result[0])
print("x - y = ", result[1])
