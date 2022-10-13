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
    print(question["name"])
    for key, value in question["answers"].items():
        value = str(value)
        print(f"   {key}) {value}")

    user_answer = input("\nSelect an answer: ")

    if user_answer == question["good_answer"]:
        print("Enhorabuena, has acertado!")
    elif user_answer in ["a", "c"]:
        print("No era la respuesta correcta =(")
    elif user_answer not in ["a", "b", "c"]:
        print("Ni a, b, c escogiste!")
