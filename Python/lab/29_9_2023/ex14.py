simple_set = {'Abhishek','Bunty','Ashish','Bhawna','Bimal','Aman','Bhavesh'}
A_name_set = set()
B_name_set = set()
for i in simple_set:
    if i.lower().startswith('a'):
        A_name_set.add(i)
    else:
        B_name_set.add(i)
print("Set with names begins with A: ", A_name_set)
print("Set with names begins with B: ", B_name_set)

    