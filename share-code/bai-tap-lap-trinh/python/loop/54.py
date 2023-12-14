yourNumber = int(input("Nhập số nguyên: "))

num_str = str(yourNumber)

is_increasing = "Yes"

for i in range(len(num_str)-1):
    if int(num_str[i]) > int(num_str[i+1]):
        is_increasing = "No"
        break

print(is_increasing)