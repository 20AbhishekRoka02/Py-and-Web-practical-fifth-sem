def show_employee(name, salary=9000):
    print("Employee name: ", name)
    print("Employee salary: ", salary)

name = input("Enter name: ")
salary = int(input("Enter salary: "))
print("\nPassing name only:-")
show_employee(name)
print("\nPassing name and salary")
show_employee(name, salary)
