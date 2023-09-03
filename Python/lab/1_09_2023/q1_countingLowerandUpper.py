def count_lower_upper(userstring):
    record = {"lower":0, "upper":0}
    characterRange = list(range(65,91)) + list(range(97,123))
    for i in userstring:
        if ord(i) in characterRange:
            if i.islower():
                record["lower"]+=1
            elif i.isupper():
                record["upper"]+=1
    return record

while True:
    user = input("Enter String: ")
    print(count_lower_upper(user))

