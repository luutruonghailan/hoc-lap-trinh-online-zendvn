height = int(input("Nhập chiều cao: "))
result = ""

for i in range(1, height + 1):
    result += "+" * i + "\n"

print(result, end="")