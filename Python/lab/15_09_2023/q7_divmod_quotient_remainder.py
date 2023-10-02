def divmod(numtuple):
    return numtuple[0]//numtuple[1], numtuple[0]%numtuple[1]

result = divmod((10,3))
print("Quotient is: ", result[0])
print("Remainder is: ", result[1])