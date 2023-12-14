input_str       = "ab@#AB69C!}+21"
digits          = ""
letters         = ""
special_chars   = ""

for char in input_str:
    if char.isdigit():
        digits += char
    elif char.isalpha():
        letters += char
    else:
        special_chars += char

print("Chuỗi số:", digits)
print("Chuỗi chữ:", letters)
print("Chuỗi đặc biệt:", special_chars)