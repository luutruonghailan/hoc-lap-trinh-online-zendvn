natural_number  = int(input("Nhập số tự nhiên: "))
result_end      = "Vui lòng nhập một số tự nhiên lớn hơn 0."

if natural_number > 0:
    # Cách 1:
    total = 0
    result_string = ""

    for i in range(1, natural_number + 1):
        total += i
        result_string += str(i)
        if i < natural_number:
            result_string += " + "

    # Cách 2:
    # total = sum(range(1, natural_number + 1))
    # result_string = " + ".join(map(str, range(1, natural_number + 1)))

    result_end = f"{result_string} = {total}"

print(result_end)