number_1 = float(input("Số 1: "))
number_2 = float(input("Số 2: "))
operation = input("Phép tính: ")

notice = "Không thực hiện được, chỉ chấp nhận các phép tính + - x :"

if operation == "+":
    notice = "{:g} + {:g} = {:g}".format(number_1, number_2, number_1 + number_2)
elif operation == "-":
    notice = "{:g} - {:g} = {:g}".format(number_1, number_2, number_1 - number_2)
elif operation in ['x', "*"]:
    notice = "{:g} {} {:g} = {:g}".format(number_1, operation, number_2, number_1 * number_2)
elif operation in ["/", ":"]:
    if number_2 != 0:
       notice = "{:g} {} {:g} = {:g}".format(number_1, operation, number_2, number_1 / number_2)
    else:
        notice = "Không thực hiện được phép chia cho 0."

print(notice)
