arr     = [1, 2, 3, 2]

# Cách 1:
arrNew  = []

for item in arr:
    if item not in arrNew:
        arrNew.append(item)

# Cách 2:
# arrNew  = list(set(arr))

print("arrNew =", arrNew)