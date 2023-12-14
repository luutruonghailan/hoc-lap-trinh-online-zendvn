arr     = [1, 2, 3, 2]

# Cách 1:
arr_odd  = []
arr_even = []

for item in arr:
    if item % 2 == 0:
        arr_even.append(item)
    else:
        arr_odd.append(item)

arr_odd  = list(set(arr_odd))
arr_even = list(set(arr_even))

# Cách 2:
# arrOdd = set(item for item in arr if item % 2 != 0)
# arrEven = set(item for item in arr if item % 2 == 0)

# Cách 3:
# arrOdd  = set()
# arrEven = set()

# for item in arr:
#     if item % 2 == 0:
#         arrEven.add(item)
#     else:
#         arrOdd.add(item)

print("arrOdd =", arr_odd)
print("arrEven =", arr_even)