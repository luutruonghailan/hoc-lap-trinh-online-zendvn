height = 5
result = ""

for i in range(height):
    for j in range(height):
        if i == 0 or i == height - 1 or i + j == height - 1:
            result += "*"
        else:
            result += " "
    result += "\n"

print(result, end="")