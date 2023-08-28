class customStdIO:
    def __init__(self):
        pass
    def customInput(*args) -> str:
        newStr = ""
        for i in args:
            newStr += str(i)
        user_input = input(newStr)
        return user_input


if __name__ == "__main__":
    app = customStdIO()
    result = app.customInput("Enter element no. ", 1, " in list: ", 89)
    print(result)