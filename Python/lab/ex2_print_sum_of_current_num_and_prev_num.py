prev_num = 0
rangelen = range(10)
currentnum=0
for i in rangelen:
    currentnum = prev_num + i
    print("Previous number is ", prev_num, " currentnum is ", currentnum)
    prev_num = currentnum
