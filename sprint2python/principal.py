import time

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
        start_time = time.time()
        print(f"El factorial de {number_input}: " + str(func_factorial(number_input)))
        end_time = time.time()
        elapsed_time = end_time - start_time
        print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')
    elif menu_option.lower() == "b":
        number_input = int(input("Dime un número para calcular su factorial SIN recursividad: "))
        start_time = time.time()
        print(f"El factorial de {number_input}: " + str(func_factorial2(number_input)))
        end_time = time.time()
        elapsed_time = end_time - start_time
        print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')

if __name__ == '__main__':
    main()
