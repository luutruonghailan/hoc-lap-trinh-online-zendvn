height = 5
result = ""

for i in range(1, height + 1):
    spaces  = " " * (height - i)
    numbers = "".join(str(j) for j in range(i, 0, -1))
    result += f"{spaces}{numbers}\n"

print(result, end="")