height = 5
result = ""

for i in range(height, 0, -1):
    plus_char   = "+" * i
    equal_char  = "=" * (height - i)

    result += equal_char + plus_char + "\n"

print(result, end="")