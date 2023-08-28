list1= [23,44,567,67,88,987]
list2 = [24, 45, 89, 90, 33]
new_list = []
for i in list1:
    if i%2==1:
        new_list.append(i)

for i in list2:
    if i%2==0:
        new_list.append(i)

print("New list is: ", new_list)