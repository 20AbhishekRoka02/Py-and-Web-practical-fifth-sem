user_string = input("Enter string: ")
num_of_chars = int(input("Enter number of characters to remove from beginning: "))
new_string = user_string[num_of_chars:-1]
print("Your string after removing first ", num_of_chars, " is: ", new_string)