your_number = int(input("Nhập một năm: "))

notice = "Không là năm nhuận"

if (your_number % 400 == 0) or (your_number % 4 == 0 and your_number % 100 != 0):
    notice = "Năm nhuận"

print(notice)    