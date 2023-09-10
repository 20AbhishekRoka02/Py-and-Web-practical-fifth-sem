def x_square_cube():
    returnList = []
    for x in range(1,21):
        returnList.append((x,x**2,x**3))

    return returnList
print(x_square_cube())