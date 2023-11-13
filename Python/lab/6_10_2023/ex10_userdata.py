relation = {
    "U123": {
        "rollnum": "10621019",
        "name": "Abhishek Roka",
        "city": "New Delhi"
    },
    "U124": {
        "rollnum": "10621009",
        "name": "Bunty",
        "city": "Patna"
    },
    "U125": {
        "rollnum": "10621897",
        "name": "Manan",
        "city": "NSP"
    }
}

while True:
    print("Options:")
    print("1. Print data for a specific user")
    print("2. Exit")
    choice = input("Enter your choice: ")

    if choice == "1":
        user_id = input("Enter user ID (e.g., U123, U124, U125): ")
        if user_id in relation:
            user_data = relation[user_id]
            print(f"User ID: {user_id}")
            print(f"Roll Number: {user_data['rollnum']}")
            print(f"Name: {user_data['name']}")
            print(f"City: {user_data['city']}")
        else:
            print("User ID not found in the dataset.")
    elif choice == "2":
        break
    else:
        print("Invalid choice. Please enter a valid option.")

print("Program exited.")
