import random
random_num_list = [random.randrange(10,101) for i in range(20)]
print("Random number list: ", random_num_list)

i=0
while i<len(random_num_list):
    if random_num_list[i]>=20 and random_num_list[i]<=50:
        del random_num_list[i]
    else: 
        i+=1

print("List after removing elements between 20 and 50: ", random_num_list)
