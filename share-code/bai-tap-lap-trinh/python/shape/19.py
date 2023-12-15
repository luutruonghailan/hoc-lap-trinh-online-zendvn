height   = 7
result = ""

for i in range(height):
    for j in range(height):
        if i == 0 or i == height - 1 or j == 0 or j == height - 1 or i == j or j == height - 1 - i:
            result += "*"
        else:
            result += " "
    result += "\n"

print(result, end="")