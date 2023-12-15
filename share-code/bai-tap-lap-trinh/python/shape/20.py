height = 5
result = ""

for i in range(height, 0, -1):
    space_character = " " * (height - i)
    numbers = "".join(str(j) for j in range(1, i + 1))
    record = space_character + numbers
    result += record + "\n"

print(result, end="")