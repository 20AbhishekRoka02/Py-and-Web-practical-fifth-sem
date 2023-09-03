def create_array(dims,values):
    #dims and values are tuples.
    l=0
    array = []
    if len(values)==dims[0]*dims[1]*dims[2]:
        for i in range(dims[0]):
            subarray=[]
            for j in range(dims[1]):
                subsubarray=[]
                for k in range(dims[2]):
                    subsubarray.append(values[l])
                    l+=1
                subarray.append(subsubarray)
            array.append(subarray)
    return array

print(create_array((3,8,3),[i for i in range(3*8*3)]))

        
    





    
