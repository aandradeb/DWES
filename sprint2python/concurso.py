import random

questions = [
    {
        "name": "What year was DOOM released?",
        "good_answer": "b",
        "answers": {
            "a": 1990,
            "b": 1993,
            "c": 1994
        }
    }, 
    {
        "name": "Which is not a compiled language?",
        "good_answer": "c",
        "answers": {
            "a": "Rust",
            "b": "C++",
            "c": "JavaScript"
        }
    },
    {
        "name": "What is ANSI?",
        "good_answer": "a",
        "answers": {
            "a": "American National Standards Institute",
            "b": "American Nautilus Sphere Institute",
            "c": "Anchor Nilo Salt Ins"
        }
    }
]

selected_questions = random.sample(range(0, len(questions)), 2)
CORRECT_ANSWER = 10
WRONG_ANSWER = 5
user_points = 0
user_answers = []

def display_questions():
    """ Display available questions """

    for i in selected_questions:
        print("\n" + questions[i]["name"])

        for key, value in questions[i]["answers"].items():
            value = str(value)
            print(f"   {key}) {value}")

        user_answer = input("\nSelect an answer: ")
        user_answers.append(user_answer.lower())


def calculate_points(user_points):
    """ Calculate points of user """
    i = 0

    for answer in user_answers:
        if answer == questions[selected_questions[i]]["good_answer"]:
            user_points += CORRECT_ANSWER
        elif answer != questions[selected_questions[i]]["good_answer"]:
            user_points -= CORRECT_ANSWER
        i += 1
    
    return user_points


def main():
    """ Main function to execute all code """
    display_questions()
    print("Los puntos totales son: " + str(calculate_points(user_points)))


if __name__ == '__main__':
    main()