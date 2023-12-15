height = 3
result = ""

for i in range(1, height + 1):
    around_num  = str(i) * (i-1)
    around_char = "=" * (height - i)
    
    result += around_char + around_num + str(i) + around_num + around_char + "\n"

print(result, end="")