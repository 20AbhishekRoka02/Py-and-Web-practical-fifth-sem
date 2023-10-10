import matplotlib.pyplot as plt

def letter_frequency(user_string):
    letters_dict = {letter:user_string.count(letter) for letter in user_string if letter.isalpha()}
    
    # plotting the frequency table
    plt.bar(letters_dict.keys(), letters_dict.values())
    plt.xlabel('letters')
    plt.ylabel('occurance')
    plt.title('letters frequency given string')
    plt.show()

letter_frequency(input("Enter text: "))
