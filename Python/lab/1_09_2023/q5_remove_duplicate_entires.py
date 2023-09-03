
def sanitize_list(givenList):
    print(givenList)
    newList = []
    for i in set(givenList):
        newList.append(i)
    return newList

print(sanitize_list([8, 8, 6, 4, 1, 6, 1, 5, 8, 5]))