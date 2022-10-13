from factorial import func_factorial
from factorial2 import func_factorial2


def display_menu():
    """Display the menu"""
    print("  [ Menu ]\n")
    print("    a) Usar func_factorial CON recursividad")
    print("    b) Usar func_factorial2 SIN recursividad")


def main():
    """ Main function to execute all code """
    display_menu()
    menu_option = input("\nEscoge una opcion: ")

    if menu_option.lower() == "a":
        number_input = int(input("Dime un número para calcular su factorial CON recursividad: "))
        print(f"El factorial de {number_input}: " + str(func_factorial(number_input)))
    elif menu_option.lower() == "b":
        number_input = int(input("Dime un número para calcular su factorial SIN recursividad: "))
        print(f"El factorial de {number_input}: " + str(func_factorial2(number_input)))

main()