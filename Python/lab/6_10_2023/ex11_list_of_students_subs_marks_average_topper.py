students = {
    "abhishek":[97,98,99],
    "amit":[78,90,67],
    "abhinav":[67,45,90]
}
max_marks = 0
name = ""
for i in students.keys():
    marks =  sum(students[i])
    if marks > max_marks:
        max_marks = marks
        name = i

    students[i] = [marks, marks/3]
print("Students performance:\n",students)
print(f"Topper is: {name} with marks: {max_marks}")



