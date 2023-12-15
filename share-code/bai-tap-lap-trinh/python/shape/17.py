height = 3
result = ""

for i in range(1, height + 1):
    char = "=" * (height - i)
    left = ""

    for j in range(1, i + 1):
        left += str(j)

    right = left[:-1][::-1]

    result += char + left + right + char + "\n"

print(result, end="")