def func_factorial(n):
    """Calculate factorial of n"""
    if n in [0, 1]:
        return 1
    
    return n * func_factorial(n - 1)