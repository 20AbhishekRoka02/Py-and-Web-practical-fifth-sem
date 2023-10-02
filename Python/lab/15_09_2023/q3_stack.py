stack = []
def push(element):
    stack.append(element)

def poping():
    print("Popped: ",stack.pop())

while True:
    print("""\n\nOperations to be done on stack:
1. Push
2. Pop
3. Display stack
e. Exit
Enter: """, end=" ")
    option = input()
    if option=='1':
        element = input("Enter element to push: ")
        push(element)
    elif option=='2':
        poping()
    elif option=='3':
        print("Stack is: ", stack)
    elif option.lower() == 'e':
        print("Program Terminated...")
        break
    else:
        print("Invalid option!")

