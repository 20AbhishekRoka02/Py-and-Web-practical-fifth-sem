def convert(sentence):
    return "-".join(sorted(sentence.split("-")))
user_input = input("Enter string: ")
print(convert(user_input))