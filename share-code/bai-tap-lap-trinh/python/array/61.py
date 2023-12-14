arr     = [1, 2, 3, 2]

# Cách 1:
arrOdd  = []
arrEven = []

for item in arr:
    if item % 2 == 0:
        arrEven.append(item)
    else:
        arrOdd.append(item)

arrOdd  = list(set(arrOdd))
arrEven = list(set(arrEven))

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

print("arrOdd =", arrOdd)
print("arrEven =", arrEven)