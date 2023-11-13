portfolio={
    'accounts':['SBI','IOB'],
    'shares':['HDFC','ICICI','TM','TCS'],
    'ornaments':['10 gm gold','1 kg silver']
}

portfolio['MF']=['Reliance','ABSL']
portfolio['accounts']=['Axis','BOB']
portfolio['shares'] = sorted(portfolio['shares'])
del portfolio['ornaments']

print(portfolio)