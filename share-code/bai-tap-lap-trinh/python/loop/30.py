start = 4
end = 5

# Cách 1:
result = ""

for i in range(start + 1, end):
    if i % 2 == 0:
        result += str(i) + " "

result = result.rstrip() if result else "Không có"

# Cách 2:
# even_numbers = [str(i) for i in range(start + 1, end) if i % 2 == 0]

# result = " ".join(even_numbers) if even_numbers else "Không có"

print(result)