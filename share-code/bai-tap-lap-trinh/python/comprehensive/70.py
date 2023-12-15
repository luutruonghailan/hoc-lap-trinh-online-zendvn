your_number = 999

units = ['', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín', 'mười']
tens  = ['', 'mười', 'hai mươi', 'ba mươi', 'bốn mươi', 'năm mươi', 'sáu mươi', 'bảy mươi', 'tám mươi', 'chín mươi']

hundreds    = your_number // 100
remainder   = your_number % 100
tens_digit  = remainder // 10
units_digit = remainder % 10

result = ''

if hundreds > 0:
    result += units[hundreds] + ' trăm '

if remainder > 0:
    if remainder < 10:
        result += units[remainder]
    elif remainder < 20:
        result += 'mười ' + units[remainder % 10]
    else:
        result += tens[tens_digit]
        if units_digit > 0:
            result += ' ' + units[units_digit]

print(f"{your_number}: {result}")