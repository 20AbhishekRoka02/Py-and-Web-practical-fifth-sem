marks = {
'Subu' : { 'Maths' : 88, 'Eng' : 60, 'SSt' : 95 },
'Amol' : { 'Maths' : 78, 'Eng' : 68, 'SSt' : 89 },
'Raka' : { 'Maths' : 56, 'Eng' : 66, 'SSt' : 77 }
}
print('Marks obtained by Amol in english:', marks['Amol']['Eng'])
marks['Raka']['Maths'] = '77'
print(marks)
marks = dict(sorted(marks.items( )))
print(marks)