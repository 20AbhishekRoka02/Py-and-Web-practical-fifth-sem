s = {10,2,-3,4,5,88}
print("Number of items in s= ",len(s))
print("Maximum element in s= ", max(s))
print("Minimum element in s= ", min(s))
print("Sum of all elements in s= ", sum(s))
k=set(sorted(list(s)))
print("New set is: ", k)
print("100 is element of s: ", 100 in s)
print("-3 is element of s: ", -3 in s)



