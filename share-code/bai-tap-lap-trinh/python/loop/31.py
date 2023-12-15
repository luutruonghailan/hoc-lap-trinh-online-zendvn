start = 39
end = 40
result = ""

for i in range(start - (start % 13) + (13 if start % 13 != 0 else 0), end, 13):
    result += str(i) + " "

result = result.rstrip() if result else "Không có"

print(result)