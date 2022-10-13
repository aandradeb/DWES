question = {
    "name": "What year was DOOM released?",
    "good_answer": "b",
    "answers": {
        "a": 1990,
        "b": 1993,
        "c": 1994
    }
}

if __name__ == '__main__':
    user_answer = input(question["name"] + ": " )

    if user_answer == question["good_answer"]:
        print("Enhorabuena, has acertado!")
    elif user_answer in ["a", "c"]:
        print("No era la respuesta correcta =(")
    elif user_answer not in ["a", "b", "c"]:
        print("Ni a, b, cescogiste!")
