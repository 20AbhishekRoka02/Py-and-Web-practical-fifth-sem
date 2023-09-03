def create_array(list1,list2):    
    list3=[]
    for i in list1:
        if i in list2:
            list3.append(i)
    return list3

print(create_array([3, 2, 5, 2, 8, 8, 8, 7, 4, 2],[8, 1, 7, 7, 1, 8, 5, 4, 2, 6]))
