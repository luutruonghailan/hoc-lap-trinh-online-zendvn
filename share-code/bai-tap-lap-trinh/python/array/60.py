arr     = [1, 2, 3, 2]

# Cách 1:
arr_new  = []

for item in arr:
    if item not in arr_new:
        arr_new.append(item)

# Cách 2:
# arrNew  = list(set(arr))

print("arrNew =", arr_new)