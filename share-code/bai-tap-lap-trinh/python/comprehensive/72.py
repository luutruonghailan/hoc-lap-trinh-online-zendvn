days_english    = ["", "", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]
days_vietnamese = ["", "", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy", "Chủ nhật"]

your_number = 18

number_one = your_number // 10
number_two = your_number % 10

result = "Không giải mã được"

if number_one == 1 and 2 <= number_two <= 8:
    result = days_english[number_two]
elif number_one == 2 and 2 <= number_two <= 8:
    result = days_vietnamese[number_two]

print(result)