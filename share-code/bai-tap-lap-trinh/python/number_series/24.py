natural_number = int(input("Nhập số tự nhiên: "))
result = "Vui lòng nhập một số tự nhiên lớn hơn 0."

if natural_number > 0:
    total = 0
    result_string = ""

    for i in range(1, natural_number + 1):
        total += i ** 2
        result_string += f"{i} ^ 2"

        if i < natural_number:
            result_string += " + "

    result = f"{result_string} = {total}"
    
print(result)