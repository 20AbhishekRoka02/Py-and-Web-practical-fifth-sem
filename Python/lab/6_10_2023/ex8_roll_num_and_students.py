students= {
    "10621019":"Abhishek",
    "10621121":"Bunty",
    "10621001":"Manan",
    "10621991":"Mayank"
}

rollnum = input("Enter roll number: ")
if rollnum in students.keys():
    print("Congratulations ",students[rollnum],"!",sep="")
else:
    print("Congratulations Students!")