import random

start_number = 39
end_number = 69

result = "Số bắt đầu phải nhỏ hơn Số kết thúc"

if start_number < end_number:
    random_number = random.randint(start_number, end_number)
    result = f"Số ngẫu nhiên: {random_number}"

print(result)