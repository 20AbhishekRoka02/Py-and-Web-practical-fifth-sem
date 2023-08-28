length_of_triangle_height = int(input("Enter height of triangle: "))
order_of_height = range(length_of_triangle_height,0,-1)
for i in order_of_height:
    elements_range = range(i)
    for j in elements_range:
        print("*",end=" ")
    print()
