names_list = ["Nidhi","Niharika","Meena",("Abhishek","Bunty","Manan","Rohit"),"Rashmi","Drishti"]
girls = 0
boys=0
i=0
while i<len(names_list):
    if type(names_list[i]) is tuple:
        boys=len(names_list[i])
    else:
        girls+=1
    i+=1
print("Number of boys=", boys, "\nNumber of girls=",girls)
