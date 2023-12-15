str = "haI lan"
swapped_str = ""

for char in str:
    if char.isupper():
        swapped_str += char.lower()
    else:
        swapped_str += char.upper()

print(swapped_str)
