from random import randrange
nums = set([randrange(15,46) for i in range(10)])
count = 0
greaterthan35 = []

for i in nums:
    if i<30:
        count+=1
    elif i > 35:
        greaterthan35.append(i)

for i in greaterthan35:
    nums.discard(i)

print("Numbers less than 30 in given set: ", count)
print("Set after deleting all numbers greater than 35: ", nums)
