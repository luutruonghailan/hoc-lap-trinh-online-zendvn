arr = [1, 2, 3, 4]

sum_even = sum(item for item in arr if item % 2 == 0)
sum_odd  = sum(item for item in arr if item % 2 != 0)
sum_all  = sum(arr)

print(f"sumEven = {sum_even}\nsumOdd = {sum_odd}\nsumAll = {sum_all}")