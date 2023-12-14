num_rows = 5
result = ""

for i in range(1, num_rows + 1):
    result += " " * (num_rows - i)

    for j in range(1, 2 * i):
        result += "*"

    result += "\n"

print(result, end="")