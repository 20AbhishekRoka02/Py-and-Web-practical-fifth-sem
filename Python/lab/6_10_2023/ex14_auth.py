users={
    "user1":"helloWorld",
    "user2":"privieat",
    "user3":"isDollarGood",
    "user4":"password",
    "user5":"12345678",
    "user6":"qwerty",
    "user7":"09102003",
    "user8":"where_is_mongo",
    "user9":"hello",
    "user10":"yes_old+LEds1"

}

user = input("Enter username: ")
password = input("Enter password: ")

good = False
if user in users.keys():
    if users[user] == password:
        print("Welcome ", user)
        good = not good

if not good:
    print("Bad Credentials. Try again!")