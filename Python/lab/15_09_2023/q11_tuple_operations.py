data = ('F','l','a','b','b','e','r','g','a','s','t','e','d') #create tuple

# adding '!' in end of tuple.
data = list(data) #unpacking tuple
data.append('!') 
data=tuple(data)#packing tuple
print("tuple after appending '!' in it: ", data)

# converting tuple to string
tupletostring = "".join(data)
print("After converting tuple to string: ", tupletostring)

# extracting ('b','b') from given tuple
if data[data.index('b')+1] == 'b':
    print(data[data.index('b'):data.index('b')+2])

# Counting occurance of 'e' in given tuple
print("Number of occurance of 'e' is ", data.count('e'))

# checking 'r' exists in data or not
print("'r' exists in given tuple: ", 'r' in data)

# converting tuple to list
data = list(data)
print("After converting tuple to list: ", data)

# deleting characters 'b','b','e','r' from given tuple
data = tuple("".join(data).replace('bber',""))
print("tuple after deleting characters 'b','b','e','r': ", data)

    
