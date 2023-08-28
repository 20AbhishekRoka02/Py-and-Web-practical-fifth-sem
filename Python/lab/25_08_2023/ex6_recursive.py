def sumNumbers(n):
    if n==0:
        return 0
    else:
        return n+sumNumbers(n-1)
    
print(sumNumbers(10))
