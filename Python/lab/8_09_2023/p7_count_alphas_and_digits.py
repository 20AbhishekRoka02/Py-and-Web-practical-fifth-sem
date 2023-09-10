def count_alphabets_digits(userstring):
    record = {"alphabets":0, "digits":0}
    characterRange = list(range(65,91)) + list(range(97,123)) + list(range(48,58))
    for i in userstring:
        if ord(i) in characterRange:
            if i.isalpha():
                record["alphabets"]+=1
            elif i.isdigit():
                record["digits"]+=1
    return record

while True:
    user = input("Enter String: ")
    print(count_alphabets_digits(user))