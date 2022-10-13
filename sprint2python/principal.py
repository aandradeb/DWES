from factorial import func_factorial

number_input = int(input("Dime un número para calcular su factorial: "))
print(f"El factorial de {number_input}: " + str(func_factorial(number_input)))