height   = 5
result = ""

for i in range(height):
    row = ""
    
    for j in range(height):
        if i == 0 or i == height - 1 or j == i or j == height - 1 - i:
            row += "*"
        else:
            row += " "

    result += row + "\n"

print(result, end="")