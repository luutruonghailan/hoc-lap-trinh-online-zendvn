natural_number = int(input("Nhập số tự nhiên: "))
result_end = "Vui lòng nhập một số tự nhiên lớn hơn 0."

if natural_number > 0:
    result_num    = 1
    result_string = ""

    for i in range(1, natural_number + 1):
        result_num *= i
        result_string += str(i)
        if i < natural_number:
            result_string += " * "

    result_end = f"{result_string} = {result_num}"

print(result_end)
    