students= {
    "Abhishek":19,
    "Bunty":18,
    "Manan":20,
    "Mayank":18
}
cricketers = {'Virat': 50, 'Rohit': 50, 'Yujvendra': 50, 'Brett': 50, 'Mitchell': 50, 'Chris': 50}
new_dict = {
    1:2,
    2:3,
    3:1,
    4:0
}
forth_dict = {**students,**cricketers,**new_dict}
print("Fourth dictionary after concatenating three dictionaries: ", forth_dict)
