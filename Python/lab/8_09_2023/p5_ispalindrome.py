def ispalindrome(arg_string):
    arg_string = arg_string.replace(" ","").lower()
    if arg_string == arg_string[::-1]:
        return True
    return False
user_string = input("Enter string: ")
print("Palindrome condition: ",ispalindrome(user_string))
