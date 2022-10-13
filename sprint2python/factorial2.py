def func_factorial2(n):
    """Factorial function without recursivity"""
    factorial = 1
    for i in range(1,n + 1):    
       factorial = factorial * i

    return factorial