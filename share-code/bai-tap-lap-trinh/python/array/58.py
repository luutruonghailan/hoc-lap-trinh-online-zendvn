arr = [1, 2, 3, 4]

sumEven = sum(item for item in arr if item % 2 == 0)
sumOdd  = sum(item for item in arr if item % 2 != 0)
sumAll  = sum(arr)

print(f"sumEven = {sumEven}\nsumOdd = {sumOdd}\nsumAll = {sumAll}")