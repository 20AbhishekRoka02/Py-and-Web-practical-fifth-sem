def convert(arg_string):
    x = sorted(set(arg_string.split(" ")))
    return " ".join(x)

sentence = input("Enter string: ")
print(convert(sentence))
