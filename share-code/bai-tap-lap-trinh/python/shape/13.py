height = 3
result = ""

for i in range(height, 0, -1):

    result += "=" * (height - i) + "+" * i + "\n"

print(result, end="")