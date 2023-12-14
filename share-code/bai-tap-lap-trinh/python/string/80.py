import re

input_str       = "ab@#AB69C!}+21"
digits          = ""
letters         = ""
special_chars   = ""

# Cách 1:
for char in input_str:
    if char.isdigit():
        digits += char
    elif char.isalpha():
        letters += char
    else:
        special_chars += char

# Cách 2:
# digits = ''.join(re.findall(r'\d', input_str))

# letters = ''.join(re.findall(r'[a-zA-Z]', input_str))

# special_chars = ''.join(re.findall(r'[^a-zA-Z0-9]', input_str))

print("Chuỗi số:", digits)
print("Chuỗi chữ:", letters)
print("Chuỗi đặc biệt:", special_chars)