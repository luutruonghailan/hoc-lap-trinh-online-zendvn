str    = "ab2cc"
result = "false" # Giống output

for char in str:
    if char.isdigit():
        result = "true" # Giống output
        break

print(result)
