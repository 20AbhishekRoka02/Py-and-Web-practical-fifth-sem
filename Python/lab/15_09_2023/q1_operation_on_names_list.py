#initializing the list
namelist=['Anil','Amol','Aditya','Avi','Alka']

#inserting Anuj before Aditya in list.
namelist.insert(namelist.index('Aditya'),'Anuj')
print("Name list after inserting 'Anuj' before 'Aditya' : ", namelist)

# Appeding name Zulu to the list
namelist.append('Zulu')
print("Name list after appending name 'Zulu' to list: ", namelist)

# removing Avi from the list
namelist.remove('Avi')
print("Name list after removing 'Avi' from the list: ", namelist)

# replacing Anil with AnilKumar
namelist[namelist.index('Anil')]='AnilKumar'
print("Name list after replacing 'Anil' with 'AnilKumar' in the list: ", namelist)

# Sorting the list
namelist.sort()
print("Name list after names in the list: ", namelist)

# reversing the list
namelist.reverse()
print("Name list after reversing the order of names in the list: ", namelist)


