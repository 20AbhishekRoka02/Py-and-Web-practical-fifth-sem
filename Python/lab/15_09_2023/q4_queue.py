queue = []
def enqueue(element):
    queue.append(element)

def dequeue():
    global queue
    print("Dequeued element: ", queue[0])
    queue=queue[1:]

while True:
    print("""\n\nOperations to be done on queue:
1. Enqueue
2. Dequeue
3. Display queue
e. Exit
Enter: """, end=" ")
    option = input()
    if option=='1':
        element = input("Enter element to enqueue: ")
        enqueue(element)
    elif option=='2':
        dequeue()
    elif option=='3':
        print("queue is: ", queue)
    elif option.lower() == 'e':
        print("Program Terminated...")
        break
    else:
        print("Invalid option!")

    