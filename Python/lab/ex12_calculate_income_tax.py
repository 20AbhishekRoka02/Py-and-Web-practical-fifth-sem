"""
Taxable income           Rate
10,000                      0
next 10,000                10
remaining                  20
"""

income_tax = 0
your_income = float(input("Your income is $ "))
income_division = []
if your_income<10000:
    income_tax=0
elif your_income < 20000:
    income_division.append(10000)
    income_division.append(your_income-10000)
else:
    income_division.append(10000)
    income_division.append(10000)
    income_division.append(your_income-20000)

length = len(income_division)
rangeLen = range(length)
for i in rangeLen:
    if i == 1:
        income_tax += income_division[i]*0.1
    elif i > 1:
        income_tax += income_division[i]*0.2
print("Your income tax is: $", income_tax, "/-")

