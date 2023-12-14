yourNumber = int(input("Nhập số nguyên: "))

num_str = str(yourNumber)

# Cách 1:
digit_sum = 0

for digit in num_str:
    digit_sum += int(digit)

# Cách 2:
# digit_sum = sum(int(digit) for digit in num_str)

print(f"Total: {len(num_str)} digits")
print(f"Sum: {' + '.join(num_str)} = {digit_sum}")