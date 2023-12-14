height = 5
result = ""

for i in range(1, height + 1):
    num_equals = height - i

    result += "=" * num_equals + "+" * i + "\n"

print(result, end="")