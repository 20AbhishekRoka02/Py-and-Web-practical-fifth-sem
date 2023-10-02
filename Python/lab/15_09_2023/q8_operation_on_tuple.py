multiple_of_ten = tuple([i for i in range(10,110,10) if i%10==0])
v1,v2,v3,v4,b5,v6,v7,v8,v9,v10 = multiple_of_ten
x,*_,y = multiple_of_ten
i,*_,j = multiple_of_ten
print(x,_,y)
print(i,_,j)
