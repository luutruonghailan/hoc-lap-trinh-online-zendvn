height = 5
result = ""

for i in range(1, height + 1):
    character = "+" if i % 2 == 1 else "x"        
    result += str(i) + character * i + "\n"

print(result, end="")