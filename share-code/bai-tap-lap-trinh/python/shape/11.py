height = 5
result = ""

for i in range(1, height + 1):
    plus_char   = "+" * i
    equal_char  = "=" * (height - i)
    
    result     += equal_char + plus_char + "\n"

print(result, end="")