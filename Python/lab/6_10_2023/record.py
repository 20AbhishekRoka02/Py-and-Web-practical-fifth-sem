# Database
relation = {
    "U123":{
        "rollnum":"10621019",
        "name":"Abhishek Roka",
        "city":"New Delhi"
    },
    "U124":{
        "rollnum":"10621009",
        "name":"Bunty",
        "city":"Patna"
    },
    "U125":{
        "rollnum":"10621897",
        "name":"Manan",
        "city":"NSP"
    }
}

# Query System
import re
def selectQuery(querystring, values):
    accepted_fields = ["UID","rollnum","name","city"]
    x = re.search(r'\bselect\b', querystring, re.IGNORECASE).span()[1]
    y = re.search(r'\bwhere\b',querystring,re.IGNORECASE).span()[0]
    fields = set(querystring[x:y].split(","))
    datas= dict()    
    for i in fields:
        if i == "*":
            print(relation)
            break
        else:
            if values:

                for j in relation:
                    for k in values:
                        if k[0]=="UID":
                            if j==k[1]:
                                datas[k[0]] == k[1]

                        elif relation[j][k[0]] == relation[j][k[1]]:
                            datas[i] = relation[i]              
    pass

def where(values):
    value_list = []
    for i in values:
        check_value = i.split("=")
        if len(check_value[0]) > 0: 
            value_list.append(check_value)
    return check_value


def solveQuery(query):
    tokens = query.split(" ")
    

    match tokens[0].lower():
        case ".schema":
            print("UID char(4), rollnum char(8), name varchar(50), city varchar(50)")
        case "select":            
            place = re.search(r"\bwhere\b",query,re.IGNORECASE)
            if place:
                wherevalues = query[place.span()[1]:].split(" ")
                selectQuery(query, where(wherevalues))
                

            else: 
                pass

        case ".help":
            print("Help is as follows:-")
        case ".exit":
            print("goodbye!")
            return False
    
    return True


bool = True
while bool:
    bool = solveQuery(input("meql> "))