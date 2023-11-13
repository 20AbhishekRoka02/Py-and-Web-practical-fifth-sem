a_dict = {
    1:2,
    2:3,
    3:1,
    4:0
}


while True:
    print("Options:")
    print("1. Sort in ascending order by key")
    print("2. Sort in descending order by key")
    print("3. Sort in ascending order by value")
    print("4. Sort in descending order by value")
    print("5. Exit")
    choice = input("Enter your choice: ")

    if choice == "1":
        sorted_dict = dict(sorted(a_dict.items()))
        print("Ascending order by key:", sorted_dict)
    elif choice == "2":
        sorted_dict = dict(sorted(a_dict.items(), reverse=True))
        print("Descending order by key:", sorted_dict)
    elif choice == "3":
        sorted_dict = dict(sorted(a_dict.items(), key=lambda item: item[1]))
        print("Ascending order by value:", sorted_dict)
    elif choice == "4":
        sorted_dict = dict(sorted(a_dict.items(), key=lambda item: item[1], reverse=True))
        print("Descending order by value:", sorted_dict)
    elif choice == "5":
        break
    else:
        print("Invalid choice. Please enter a valid option.")

print("Program exited.")
