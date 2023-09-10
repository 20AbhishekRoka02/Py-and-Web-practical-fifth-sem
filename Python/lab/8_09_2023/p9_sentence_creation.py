def create_sent1(sub,verb,obj):
    # using for loop
    sentences = []
    for i in sub:        
        for j in verb:            
            for k in obj:
                sentences.append(" ".join((i,j,k)))
    return sentences

def create_sent2(sub,verb,obj):
    # Using list comprehension
    return [" ".join((i,j,k)) for i in sub for j in verb for k in obj]

subject = ['He','She']
verb = ['loves', 'hates']
obj = ['TV Serial','Netflix']

print("Using create_sent1() function which uses for loop:")
for i in create_sent1(subject,verb,obj):
    print(i)
    
print("\nUsing create_sent2() function which uses list comprehension:")
for i in create_sent2(subject,verb,obj):
    print(i)

