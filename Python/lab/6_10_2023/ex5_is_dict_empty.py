def isEmptyDict(a_dict):
    if len(a_dict) <= 0:
        return True
    else:
        return False

new_dict = {
    1:2,
    2:3,
    3:1,
    4:0
}
empty_dict = dict()
print("is new_dict empty? ", isEmptyDict(new_dict))
print("is empty_dict empty? ", isEmptyDict(empty_dict))