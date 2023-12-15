your_number = int(input("Nhập số nguyên: "))

num_str = str(your_number)

is_all_even = "Yes"

for digit in num_str:
    if int(digit) % 2 != 0:
        is_all_even = "No"
        break

print(is_all_even)