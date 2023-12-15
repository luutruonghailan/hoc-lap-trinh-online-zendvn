your_char = input("Nhập vào một ký tự: ")

notice = "Không là nguyên âm"

if your_char.lower() in ['a', 'e', 'i', 'o', 'u']:
    notice = "Nguyên âm"

print(notice)