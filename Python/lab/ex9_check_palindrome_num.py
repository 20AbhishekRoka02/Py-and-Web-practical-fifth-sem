user_num = input("Enter number: ")

if user_num == user_num[::-1]:
    print(user_num, " is a palindrome number.")
else:
    print(user_num," is not a palindrome number.")