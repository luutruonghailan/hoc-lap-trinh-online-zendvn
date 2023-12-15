your_number = 123

str_number = str(your_number)

digit_sum = sum(int(digit) for digit in str_number)

print(f"{' + '.join(str(d) for d in str_number)} = {digit_sum}")