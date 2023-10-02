odd_num_list = list(range(1,10,2)) # created list of 5 odd numbers
even_num_list = list(range(2,11,2)) # created list of 5 even numbers
combined_list = odd_num_list + even_num_list # combining both list
print("Combinded list: ", combined_list)
combined_list = [11,17,29] + combined_list
print("After adding prime number to the beginning of the list: ", combined_list)
print("Number of elements present in th e list = ", len(combined_list))
combined_list[-3:len(combined_list)] = [100,200,300]
print("list after replacing last 3 numbers with 100, 200, 300: ", combined_list)
del combined_list[0:]
print("list after deleting all numbers: ", combined_list)
del combined_list
print("List deleted!")