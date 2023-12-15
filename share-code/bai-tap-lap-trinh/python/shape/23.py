height = 11
result = ""

for i in range(1, height, 2):
    space = " " * int((height - i) / 2)
    number = "*" * i
    result += space + number + "\n"

for i in range(height, 0, -2):
    space = " " * int((height - i) / 2)
    number = "*" * i
    result += space + number + "\n"

print(result, end="")