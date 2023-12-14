height = int(input("Nhập chiều cao: "))
result = ""

for i in range(1, height + 1):
    for j in range(1, i + 1):
        result += str(j)
    
    result += "\n"

print(result, end="")