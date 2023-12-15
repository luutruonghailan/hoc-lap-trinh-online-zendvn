num_rows = 5
result = ""

for i in range(1, num_rows + 1):
    space = " " * (num_rows - i)
    right = ""

    for j in range(1, i + 1):
        right += str(j)

    left = right[::-1][:-1]

    result += space + left + right + "\n"

print(result, end="")
