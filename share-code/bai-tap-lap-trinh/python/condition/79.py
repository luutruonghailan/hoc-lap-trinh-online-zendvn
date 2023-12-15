year = int(input("Nhập năm: "))
month = int(input("Nhập tháng: "))

days_in_month = 31

if month == 2:
    if (year % 400 == 0) or (year % 4 == 0 and year % 100 != 0):
        days_in_month = 29
    else:
        days_in_month = 28
elif month in [4, 6, 9, 11]:
    days_in_month = 30

print(f"Tháng {month} năm {year} là tháng có {days_in_month} ngày.")           