your_number = 4
str_one = "dương"
str_two = "chẵn"

if your_number < 0:
    str_one = "âm"

if your_number % 2 != 0:
    str_two = "lẻ"

print(f"Số nguyên {str_one} {str_two}")