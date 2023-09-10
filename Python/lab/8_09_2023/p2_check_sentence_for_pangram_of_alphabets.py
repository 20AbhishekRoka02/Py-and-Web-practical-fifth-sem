def ispangram(sentence):
    alphabets = [chr(i) for i in range(65,91)] + [chr(i) for i in range(97,123)] #list of all alphabets lowercase and uppercase

    for i in set(sentence):
        if i not in alphabets:
            return False
    
    return True
    
statement = input("Enter statment to check for pangram: ")
if ispangram(statement):
    print("It is a pangram.")
else:
    print("It is not a pangram.")
