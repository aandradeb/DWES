from random import randint

MAX_ATTEMPS = 5
current_attemps = 0

playing_game = True

user_wins = 0
bot_wins = 0

print("Welcome to Rock, Paper and Scissors game!")

def display_options():
    print("a) Rock")
    print("b) Paper")
    print("c) Scissors")


def player_select_option():
    option_selected = input("Select an option: ")
    options = {
        "a": "Rock",
        "b": "Paper",
        "c": "Scissors"
    }

    return options[option_selected]

def bot_select_option():
    random_number =  randint(0, 2)
    options = {
        0: "Rock",
        1: "Paper",
        2: "Scissors"
    }

    return options[random_number]
    
def compare_players_options(input_user, input_bot):
    global user_wins, bot_wins, current_attemps

    if input_user == input_bot:
        print("It's a DRAW!!\n")
    else:
        if input_user == "Paper" and input_bot == "Rock":
            print("Player wins, paper wins rock!\n")
            user_wins += 1
            current_attemps += 1
        elif input_user == "Paper" and input_bot == "Scissors":
            print("CPU wins, scissors wins paper\n")
            bot_wins += 1
            current_attemps += 1
        elif input_user == "Rock" and input_bot == "Paper":
            print("CPU wins, paper wins rock\n")
            bot_wins += 1
            current_attemps += 1
        elif input_user == "Rock" and input_bot == "Scissors":
            print("Player wins, rock wins scissors!\n")
            user_wins += 1
            current_attemps += 1
        elif input_user == "Scissors" and input_bot == "Rock":
            print("CPU wins, scissors wins rock!\n")
            bot_wins += 1
            current_attemps += 1
        elif input_user == "Scissors" and input_bot == "Paper":
            print("Player wins, scissors wins paper!\n")
            user_wins += 1
            current_attemps += 1


def display_winner():
    global user_wins, bot_wins

    print(f"\nScore of the game: Player {user_wins} | CPU {bot_wins}")

    if user_wins > bot_wins:
        print("Player wins the game!")
    elif bot_wins > user_wins:
        print("CPU wins the game!")


while playing_game:
    print(str(current_attemps) + " attemp(s)\n")
    display_options()

    input_user = player_select_option()
    input_bot = bot_select_option()

    compare_players_options(input_user, input_bot)

    if current_attemps == MAX_ATTEMPS:
        playing_game = False
        display_winner()