def calculation(a,b):
    result = 0
    def addition():
        return a+b
    result += addition()
    result += 5
    return result
print(calculation(3,5))